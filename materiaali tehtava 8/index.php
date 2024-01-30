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
/*a) Tee sellainen php -ohjelma, joka tulostaa esimerkkitietokannasta kaikki saalislajit, joita Pentti Ojaniemi on metsästänyt.

b) Lisää a -kohdan ohjelmaan ominaisuus, joka tulostaa esimerkkitietokannasta kaikki saalislajit, joita Risto Reipas on metsästänyt.

c) Lisää b -kohdan ohjelmaan ominaisuus, joka tulostaa esimerkkitietokannasta kaikki saalislajit, joita on saatu Peräseinäjoella.

d) Lisää c -kohdan ohjelmaan ominaisuus, joka tulostaa esimerkkitietokannasta kaikki saalislajit, joita on saatu Sahalahdella.

Otsikoi tulosteet selkeästi

Lisää ohjelmaan html -kielinen alkuosa ja loppuosa erillisistä tiedostoista. Kommentoi ohjelmasi huolellisesti.
*/
print"<h2>1. Kauris 2. Hirvi 3. Metsäjänis 4. Rusakko </h2>";



$a=mysqli_query($yhteys, "select lajiId, metsastajaId from saaliit where metsastajaId = 1234");
print "<h3>A) Kaikki saalislajit,joita Pentti Ojaniemi on metsästänyt.</h3>";

while ($rivi=mysqli_fetch_object($a)){
    print "lajiId=$rivi->lajiId metsastajaId=$rivi->metsastajaId<br>";
}

$b=mysqli_query($yhteys, "select lajiId, metsastajaId from saaliit where metsastajaId = 1235");
print "<h3>B) Kaikki saalislajit,joita Risto Reipas on metsästänyt.</h3>";

while ($rivi=mysqli_fetch_object($b)){
    print "lajiId=$rivi->lajiId metsastajaId=$rivi->metsastajaId<br>";
}

$c=mysqli_query($yhteys, "select lajiId, paikkaId from saaliit where paikkaId = 2");
print "<h3>B) Kaikki saalislajit,joita on saatu Peräseinäjoelta.</h3>";

while ($rivi=mysqli_fetch_object($c)){
    print "lajiId=$rivi->lajiId paikkaId=$rivi->paikkaId<br>";
}

$c=mysqli_query($yhteys, "select lajiId, paikkaId from saaliit where paikkaId = 1");
print "<h3>B) Kaikki saalislajit,joita on saatu Sahalahdelta.</h3>";

while ($rivi=mysqli_fetch_object($c)){
    print "lajiId=$rivi->lajiId paikkaId=$rivi->paikkaId<br>";
}




$ok=mysqli_close($yhteys);
?>

<?php
include("footer.html");
?>