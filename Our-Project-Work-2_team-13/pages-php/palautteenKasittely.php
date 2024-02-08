<?php
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

    // Include HTML structure and link to your CSS files
    echo '<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Palautteen lähetys</title>
    <link rel="stylesheet" type="text/css" href="../css/styles_Joni.css">
    <link rel="stylesheet" type="text/css" href="../css/styles_Henkka.css">
</head>
<body>
    <div class="thank-you-message">
        <h1>Kiitos viestistäsi!</h1>
        <p>Ehkä noteeraamme sen, ehkä emme.</p>
    </div>
</body>
</html>';
}
?>
