<?php
include("header.html");
?>

<?php
/* Tee sellainen PHP -ohjelma, joka tulostaa taulukon

 Kalle, Kaljami, Pelle, Peljami, Ville, Viljami
 
arvot.

Luo ensin yllä olevista alkioista taulukko, 
jonka indekseinä on lukuarvot nollasta eteenpäin ja tulosta taulukon alkiot käyttäen for, while ja do-while toistolauseita.
Tee taulukko uudelleen siten, että annat taulukon alkioille indeksiksi merkkijonot 
yksi, kaksi, kolme, nelja, viisi, kuusi ja tulosta taulukon alkiot käyttäen foreach -toistolauseen kumpaakin versiota,
 joista toisessa tulostat myös taulukon alkioiden indeksit materiaalin esimerkkien mukaisesti.*/

 /*eka taulukko */
$nimet[0]="Kalle";
$nimet[1]="Kaljami";
$nimet[2]="Pelle";
$nimet[3]="Peljami";
$nimet[4]="Ville";
$nimet[5]="Viljami";

 /*toka taulukko */
$nimetToka["yksi"]="Kalle";
$nimetToka["kaksi"]="Kaljami";
$nimetToka["kolme"]="Pelle";
$nimetToka["neljä"]="Peljami";
$nimetToka["viisi"]="Ville";
$nimetToka["kuusi"]="Viljami";

 /*for loop ekaan taulukkoon */
for ($i=0;$i<count($nimet);$i++){
    print $nimet[$i]."<br>";
}
print "<br>";

 /* while loop ekaan taulukkoon*/
$i=0;
while ($i<count($nimet)){
    print $nimet[$i]."<br>";
    $i++;
}
print "<br>";

 /* do while loop ekaan taulukkoon*/
$i=0;
do{
    print $nimet[$i]."<br>";
    $i++;
}while ($i<count($nimet));
print "<br>";

 /*foreach loop 1 tokaan taulukkoon */
foreach ($nimetToka as $x){
    print "$x <br>";
}
print "<br>";

 /*foreach loop 2 tokaan taulukkoon */
foreach ($nimetToka as $key => $value){
    print $key." :  ".$value."<br>";
}
print "<br>";

?>



<?php
include("footer.html");
?>
