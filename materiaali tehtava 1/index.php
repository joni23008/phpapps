<?php
include("header.html");
?>

<?php
/* Tee sellainen PHP ohjelma jossa esitellään kolme lukuarvoista muuttujaa,
annetaan niille arvot, tulostetaan muuttujien nimet ja arvot sekä
tulostetaan muuttujien tulo.*/
print "materiaali tehtava 1. This is from index.php <br>";

$luku1=10;
$luku2=20;
$luku3=30;

print "Muuttujan \$luku1 arvo on $luku1 <br>";
print "Muuttujan \$luku2 arvo on $luku2 <br>";
print "Muuttujan \$luku3 arvo on $luku3 <br>";

print "ja lukujen (\$luku1 \$luku2 \$luku3) summa on ";
print $luku1 * $luku2 * $luku3;
print "<br>"
?>



<?php
include("footer.html");
?>
