<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $yhteys = mysqli_connect("db", "root", "password", "deerhunter");
} catch (Exception $e) {
    header("Location: yhteysvirhe.html");
    exit;
}
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $laji = "";
    if (isset($_POST["laji"])) {
        $laji = $_POST["laji"];
    }
    // Check if the form data is not empty before inserting into the database
    if (!empty($laji)) {
        $sql = "INSERT INTO lajit (laji) VALUES (?)";
        $stmt = mysqli_prepare($yhteys, $sql);
        mysqli_stmt_bind_param($stmt, 's', $laji);
        mysqli_stmt_execute($stmt);
        // Redirect to prevent form resubmission
        header("Location: submitted.php");
        exit;
    }
}
include("header.html");
print "<h2>Tehtävä 9.</h2>";

$a = mysqli_query($yhteys, "select * from lajit");
print "<h3><i>Tee sellainen php -ohjelma, joka tulostaa listan esimerkkitietokannan kaikista lajeista.</i></h3>";
print "<h3><i>Lisää tulosteen alkuun html -lomake, johon voi kirjoittaa lajin nimen ja Lähetä -painike, 
jolla tieto lähetetään tälle samalle php -ohjelmalle.</i></h3>";
print "<h3><i>PHP -ohjelman tulee tallentaa uusi laji tietokantaan ja tulostaa edellä mainitut tulosteet 
(lomake ja lajit), jotta voi lisätä uuden lajin.</i></h3>";
print "<h4>Lajit</h4>";
while ($rivi = mysqli_fetch_object($a)) {
    print "ID = $rivi->id , Laji = $rivi->laji<br>";
}

include("lomake.html");

$ok = mysqli_close($yhteys);
include("footer.html");
?>

