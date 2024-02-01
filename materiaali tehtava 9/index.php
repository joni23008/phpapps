<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $config=parse_ini_file(".ht.configuration.ini");
    $yhteys=mysqli_connect($config["databaseserver"], $config["username"], $config["password"], $config["database"]);
} catch (Exception $e) {
    header("Location: yhteysvirhe.html");
    exit;
}
// Lajin lisäys
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // asetetaan tyhjäksi jos ei mitää annettu
    $laji = "";
    if (isset($_POST["laji"])) {
        $laji = $_POST["laji"];
    }
    // ei lisätä tyhjiä
    if (!empty($laji)) {
        $sql = "INSERT INTO lajit (laji) VALUES (?)";
        $stmt = mysqli_prepare($yhteys, $sql);
        mysqli_stmt_bind_param($stmt, 's', $laji);
        mysqli_stmt_execute($stmt);
        // suunnataan pois pääsivulta ja kiitetään lajin lisäyksestä
        header("Location: submitted.html");
        exit;
    }
}
// Lajin poistaminen
$poistettava=isset($_GET["poistettava"]) ? $_GET["poistettava"] : "";
//Jos tieto on annettu, poistetaan laji tietokannasta
if (!empty($poistettava)){
    $sql="DELETE FROM lajit WHERE id=?";
    $stmt=mysqli_prepare($yhteys, $sql);
    //Sijoitetaan muuttuja sql-lauseeseen
    mysqli_stmt_bind_param($stmt, 'i', $poistettava);
    //Suoritetaan sql-lause
    mysqli_stmt_execute($stmt);
}

//header lisätään
include("header.html");

//otsikko
print "<h2>Tehtävä 9.</h2>";
//tehtävänanto
print "<h3><i>Tee sellainen php -ohjelma, joka tulostaa listan esimerkkitietokannan kaikista lajeista.</i></h3>";
print "<h3><i>Lisää tulosteen alkuun html -lomake, johon voi kirjoittaa lajin nimen ja Lähetä -painike, 
jolla tieto lähetetään tälle samalle php -ohjelmalle.</i></h3>";
print "<h3><i>PHP -ohjelman tulee tallentaa uusi laji tietokantaan ja tulostaa edellä mainitut tulosteet 
(lomake ja lajit), jotta voi lisätä uuden lajin.</i></h3>";
print "<h4>Lajit</h4>";

//lista lajeista
$a = mysqli_query($yhteys, "select * from lajit");
while ($rivi=mysqli_fetch_object($a)){
    ?>
        <ul>
            <li>
                <?php
                print "$rivi->laji <b> Poista painamalla <a href='index.php?poistettava=$rivi->id'>tästä</a></b><br>";
                ?>
            </li>
        </ul>
    <?php
    }

//lomake lisätään
include("lomake.html");

//suljetaan mysql yhteys
$ok = mysqli_close($yhteys);

//lisätään footer
include("footer.html");
?>

