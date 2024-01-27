<?php
include("header.html");
?>

<?php
/* Tee sellainen PHP ohjelma jossa on viiden alkion kokoinen kokonaislukuarvoja sisältävä taulukko.
Lisää ohjelmaan for each toistolause, joka tulostaa alkioiden arvot ja samalla laskee alkioiden
summan +. Lopuksi ohjelma tulostaa myös summan.*/
print "materiaali tehtava 2. This is from index.php <br>";

$luvut[0]=1;
$luvut[1]=2;
$luvut[2]=3;
$luvut[3]=4;
$luvut[4]=5;
$summa=0;

foreach ($luvut as $x) {
    print "$x <br>";
    $summa+=$x;
  }

print "Alkioiden summa on $summa";
?>



<?php
include("footer.html");
?>
