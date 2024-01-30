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
/*Tee sellainen php -ohjelma, joka tulostaa listan esimerkkitietokannan kaikista lajeista. 
Lisää tulosteen alkuun html -lomake, johon voi kirjoittaa lajin nimen ja Lähetä -painike, 
jolla tieto lähetetään tälle samalle php -ohjelmalle. 
PHP -ohjelman tulee tallentaa uusi laji tietokantaan ja tulostaa edellä mainitut tulosteet 
(lomake ja lajit), jotta voi lisätä uuden lajin.

Lisää ohjelmaan html -kielinen alkuosa ja loppuosa erillisistä tiedostoista. Kommentoi ohjelmasi huolellisesti.
*/
print"<h2>Tehtävä 9.</h2>";

$a=mysqli_query($yhteys, "select * from lajit");
print "<h3><i>Tee sellainen php -ohjelma, joka tulostaa listan esimerkkitietokannan kaikista lajeista.</i></h3>";
print "<h4>Lajit</h4>";
while ($rivi=mysqli_fetch_object($a)){
    print "ID = $rivi->id , Laji = $rivi->laji<br>";
}


print "<h3><i>Lisää tulosteen alkuun html -lomake, johon voi kirjoittaa lajin nimen ja Lähetä -painike, 
jolla tieto lähetetään tälle samalle php -ohjelmalle.</i></h3>";
include("lomake.html");


print "<h3><i>PHP -ohjelman tulee tallentaa uusi laji tietokantaan ja tulostaa edellä mainitut tulosteet 
(lomake ja lajit), jotta voi lisätä uuden lajin.</i></h3>";




$ok=mysqli_close($yhteys);
?>

<?php
include("footer.html");
?>
