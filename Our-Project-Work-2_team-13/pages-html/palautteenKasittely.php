<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nimi = $_POST["nimi"];
    $sahkoposti = $_POST["sahkoposti"];
    $reseptiToive = $_POST["resepti"];
    $viesti = $_POST["viesti"];

    // Lähetä palautetta sähköpostilla
    $to = "gagok77778@gosarlar.com"; //Kohdesähköpostiosoite. Gmail (ja varmaan muutkaan) eivät ota spostia vastaan osoitteista "asd@asd.fi", joten tässä käytetään väliaikaista sähköpostia
    $subject = "Palautetta verkkosivulta"; //Vastaanotetun viestin otsikko
    $message = "Nimi: $nimi\nSähköposti: $sahkoposti\nViesti:\n$viesti"; //Lähettäjä ja itse viesti

    mail($to, $subject, $message);

    //Viesti joka palautuu palautteen lähettäjälle
    echo "Kiitos viestistäsi. Ehkä noteeraamme sen, ehkä emme!";
}
?>
