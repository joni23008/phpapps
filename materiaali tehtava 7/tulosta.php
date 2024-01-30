<?php
// Include header
include("header.html");

// Read form data
$nimi = isset($_POST["nimi"]) ? $_POST["nimi"] : null;
$sahkoposti = isset($_POST["sahkoposti"]) ? $_POST["sahkoposti"] : null;
$urheilulaji = isset($_POST["urheilulaji"]) ? $_POST["urheilulaji"] : null;
$ajankohta = isset($_POST["ajankohta"]) ? $_POST["ajankohta"] : null;

// Display user information
echo "<h2>Käyttäjän tiedot:</h2>";
echo "Nimi: $nimi<br>";
echo "Sähköposti: $sahkoposti<br>";

if ($urheilulaji) {
    echo "<p>Valitut urheilulajit:</p>";
    echo "<ul>";
    foreach ($urheilulaji as $laji) {
        echo "<li>$laji</li>";
    }
    echo "</ul>";
}

echo "Valittu ajankohta: $ajankohta";

// Include footer
include("footer.html");
?>
