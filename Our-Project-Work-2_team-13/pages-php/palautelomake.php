<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $config=parse_ini_file("../.ht.configuration_testi.ini");
    $yhteys=mysqli_connect($config["databaseserver"], $config["username"], $config["password"], $config["database"]);
} catch (Exception $e) {
    header("Location: ../pages-php/yhteysvirhe_Joni.php");
    exit;
}
//Yläpuolella otetaan yhteys tietokantaan. 
//header
include("../pages-html/includes/header_Joni.html");

//navbar
include("../pages-html/includes/navbar_Joni.html");

//palaute hooteeämällä
include("../pages-html/palaute.html");

$a = mysqli_query($yhteys, "select * from vierailijat");
while ($rivi=mysqli_fetch_object($a)){
    ?>
        <ul>
            <li>
                <?php
                print "$rivi->nimimerkki . $rivi->viesti";
                ?>
            </li>
        </ul>
    <?php
    }



//footer
include("../pages-html/includes/footer_Joni.html");

//Suljetaan yhteys tietokantaan
$ok = mysqli_close($yhteys);
?>