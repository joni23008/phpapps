<?php
include("header.html");
?>

<?php
/* Tee sellainen PHP -ohjelma, jossa annetaan kokonaislukumuuttujalle jokin arvo. 
Tämän annetun arvon perusteella ohjelma tulostaa seuraavasti:

Jos annettu arvo on pienempi kuin 0, tulostetaan ulkona on pakkasta.
Jos annettu arvo on vähintään 0, mutta pienempi kuin 5, tulostetaan Ulkona on kolea sää.
Jos annettu arvo on vähintään 5, mutta pienempi kuin 15, tulostetaan Ulkona on tyypillinen kesäsää.
Jos annettu arvo on vähintään 15, mutta alle 20, tulostetaan ulkona on melko lämmin.
Jos annettu arvo on vähintään 20, mutta alle 25, tulostetaan ulkona on kaunis kesäilma.
muussa tapauksessa tulostetaan ulkona on helle.*/
$luku=-1;

if ($luku < 0 ){
    print"Ulkona on pakkasta.";
}
else if ($luku >= 0 and $luku < 5){
    print "Ulkona on kolea sää.";
}
else if ($luku >= 5 and $luku < 15){
    print "Ulkona on tyypillinen kesäsää.";
}
else if ($luku >= 15 and $luku < 20){
    print "Ulkona on melko lämmin.";
}
else if ($luku >= 20 and $luku < 25){
    print "Ulkona on kaunis kesäilma.";
}
else{
    print "Ulkona on helle.";
}

?>



<?php
include("footer.html");
?>
