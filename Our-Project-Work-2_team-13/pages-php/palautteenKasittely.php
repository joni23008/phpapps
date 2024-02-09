<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $config=parse_ini_file("../.ht.configuration.ini");
    $yhteys=mysqli_connect($config["databaseserver"], $config["username"], $config["password"], $config["database"]);
} catch (Exception $e) {
    header("Location: ../pages-php/yhteysvirhe_Joni.php");
    exit;
}
//Yläpuolella otetaan yhteys tietokantaan. 

//Sähköposti lähetys.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nimi = $_POST["nimi"];
    $sahkoposti = $_POST["sahkoposti"];
    $reseptiToive = $_POST["resepti"];
    $viesti = $_POST["viesti"];

    // Lähetä palautetta sähköpostilla
    $to = "gagok77778@gosarlar.com";
    $subject = "Palautetta verkkosivulta";
    $message = "Nimi: $nimi\nSähköposti: $sahkoposti\nViesti:\n$viesti";

    mail($to, $subject, $message);
    }
//Sähköposti lähetys loppuu.

//Suljetaan yhteys tietokantaan
$ok = mysqli_close($yhteys);
?>

<?php
//header
include("../pages-html/includes/header_Joni.html");
?>

<div class="main-content">
  <div>
      <!-- Website name -->
      <div class="website-name">
        Kiitos palautteesta!
      </div>
      <!-- Main content text -->
      <div class="main-text">
        Kiitos, viesti lähetettiin antamaasi sähköpostiosoitteeseen!
      </div>
  </div>

    <!-- Main content image -->
    <img class="main-image" src="../images/webpageimage1.jpg" alt="Webpage Image 1"> 
</div>

<?php
//footer
include("../pages-html/includes/footer_Joni.html");
?>


