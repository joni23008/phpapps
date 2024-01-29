<?php
include("header.html");
?>

<?php
/* Tee sellainen PHP -ohjelma, 
joka laskee kahden muuttujan summan, erotuksen tulon, osamäärän ja osamäärän jakojäännöksen.

Toteuta ohjelma käyttäen aliohjelmia. Päätason koodi voisi olla esimerkiksi seuraavan näköinen:

//Metodi palauttaa yhden kokonaisluvun
 $luku1=lueLuku1();
 
//Metodi palauttaa toisen kokonaisluvun
 $luku2=lueLuku2();

//Metodi palauttaa parametrien summan 
 $summa=laskeSumma($luku1, $luku2);
 
//Metodi palauttaa parametrien erotuksen 
 $erotus=laskeErotus($luku1, $luku2);
 
//Metodi palauttaa parametrien tulon 
 $tulo=laskeTulo($luku1, $luku2);
 
//Metodi palauttaa parametrien osamäärän 
 $osamaara=laskeOsamaara($luku1, $luku2);
 
//Metodi palauttaa parametrien osamäärän jakojäännöksen 
 $jakojaannos=laskeJakojaannos($luku1, $luku2);
 
//Metodi tulostaa lasketut arvot 
 tulosta($summa, $erotus, $tulo, $osamaara, $jakojaannos);
 

Ohjelman tulostus voisi olla esimerkiksi seuraavan näköinen

Summa=14
Erotus=6
Tulo=40
Osamäärä=2.5
Jakojäännös=2
 */

?>
 <?php

//Metodi palauttaa yhden kokonaisluvun
$luku1=lueLuku1();
 
//Metodi palauttaa toisen kokonaisluvun
 $luku2=lueLuku2();

//Metodi palauttaa parametrien summan 
 $summa=laskeSumma($luku1, $luku2);
 
//Metodi palauttaa parametrien erotuksen 
 $erotus=laskeErotus($luku1, $luku2);
 
//Metodi palauttaa parametrien tulon 
 $tulo=laskeTulo($luku1, $luku2);
 
//Metodi palauttaa parametrien osamäärän 
 $osamaara=laskeOsamaara($luku1, $luku2);
 
//Metodi palauttaa parametrien osamäärän jakojäännöksen 
 $jakojaannos=laskeJakojaannos($luku1, $luku2);
 
//Metodi tulostaa lasketut arvot 
 tulosta($summa, $erotus, $tulo, $osamaara, $jakojaannos);
 

 
?>

<?php
function lueLuku1() {
$ekaluku = 10;
return $ekaluku;
}
?>

<?php
function lueLuku2() {
$ekaluku = 4;
return $ekaluku;
}
?>

<?php
function laskeSumma($luku1, $luku2) {
$summa = $luku1 + $luku2;
return $summa;
}
?>

<?php
function laskeErotus($luku1, $luku2) {
$erotus = $luku1 - $luku2;
return $erotus;
}
?>

<?php
function laskeTulo($luku1, $luku2) {
$tulo = $luku1 * $luku2;
return $tulo;
}
?>

<?php
function laskeOsamaara($luku1, $luku2) {
$osamaara = $luku1 / $luku2;
return $osamaara;
}
?>

<?php
function laskeJakojaannos($luku1, $luku2) {
$jakojaannos = $luku1 % $luku2;
return $jakojaannos;
}
?>



<?php
function tulosta($summa, $erotus, $tulo, $osamaara, $jakojaannos) {
print "Summa=". $summa . "<br>";
print "Erotus=". $erotus . "<br>";
print "Tulo=". $tulo . "<br>";
print "Osamäärä=". $osamaara . "<br>";
print "Jakojäännös=". $jakojaannos . "<br>";

}
?>

<?php
include("footer.html");
?>
