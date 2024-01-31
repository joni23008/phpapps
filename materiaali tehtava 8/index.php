<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try{
    //https://www.php.net/manual/en/function.mysqli-connect.php
    $yhteys=mysqli_connect("db", "root", "password", "deerhunter");
}
catch(Exception $e){
    header("Location: yhteysvirhe.html");
    exit;
}
?>

<?php
include("header.html");
?>

<?php
//Kaikki saalislajit
$a=mysqli_query($yhteys, "select id, laji from lajit");
print "<h4><i>A) Kaikki saalislajit</i></h4>";
while ($rivi=mysqli_fetch_object($a)){
    print "ID = $rivi->id laji = $rivi->laji<br>";
}

//Kaikki saalislajit,joita Pentti Ojaniemi on metsästänyt.
$a=mysqli_query($yhteys,"SELECT lajit.laji, metsastajat.nimi
FROM metsastajat
JOIN saaliit ON metsastajat.numero = saaliit.metsastajaId
JOIN lajit ON saaliit.lajiId = lajit.id
WHERE metsastajat.nimi LIKE 'Pentti Ojaniemi'");

print "<h4><i>A) Kaikki saalislajit,joita Pentti Ojaniemi on metsästänyt.</i></h4>";

while ($rivi=mysqli_fetch_object($a)){
?>
    <ul>
        <li>
            <?php
            print "Laji = $rivi->laji <br> Metsästäjän nimi = $rivi->nimi<br>";
            ?>
        </li>
    </ul>
<?php
}
//Kaikki saalislajit,joita Risto Reipas on metsästänyt.
$a=mysqli_query($yhteys,"SELECT lajit.laji, metsastajat.nimi
FROM metsastajat
JOIN saaliit ON metsastajat.numero = saaliit.metsastajaId
JOIN lajit ON saaliit.lajiId = lajit.id
WHERE metsastajat.nimi LIKE 'Risto Reipas'");

print "<h4><i>B) Kaikki saalislajit,joita Risto Reipas on metsästänyt.</i></h4>";

while ($rivi=mysqli_fetch_object($a)){
?>
    <ul>
        <li>
            <?php
            print "Laji = $rivi->laji <br> Metsästäjän nimi = $rivi->nimi<br>";
            ?>
        </li>
    </ul>
<?php
}
//Kaikki saalislajit,joita on saatu Peräseinäjoelta.
$a=mysqli_query($yhteys,"SELECT lajit.laji, paikkakunnat.kunta
FROM paikkakunnat
JOIN saaliit ON paikkakunnat.id = saaliit.paikkaId
JOIN lajit ON saaliit.lajiId = lajit.id
WHERE paikkakunnat.kunta LIKE 'Peräseinäjoki'");

print "<h4><i>C) Kaikki saalislajit,joita on saatu Peräseinäjoelta</i></h4>";

while ($rivi=mysqli_fetch_object($a)){
?>
    <ul>
        <li>
            <?php
            print "Laji = $rivi->laji <br> Paikkakunta = $rivi->kunta<br>";
            ?>
        </li>
    </ul>
<?php
}
//Kaikki saalislajit,joita on saatu Sahalahdelta.
$a=mysqli_query($yhteys,"SELECT lajit.laji, paikkakunnat.kunta
FROM paikkakunnat
JOIN saaliit ON paikkakunnat.id = saaliit.paikkaId
JOIN lajit ON saaliit.lajiId = lajit.id
WHERE paikkakunnat.kunta LIKE 'Sahalahti'");

print "<h4><i>D) Kaikki saalislajit,joita on saatu Sahalahdelta</i></h4>";

while ($rivi=mysqli_fetch_object($a)){
?>
    <ul>
        <li>
            <?php
            print "Laji = $rivi->laji <br> Paikkakunta = $rivi->kunta<br>";
            ?>
        </li>
    </ul>
<?php
}

$ok=mysqli_close($yhteys);
?>

<?php
include("footer.html");
?>