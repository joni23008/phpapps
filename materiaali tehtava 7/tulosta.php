<?php
include("header.html");
?>

<?php
$nimi = isset($_POST["nimi"]) ? $_POST["nimi"] : null;
$sahkoposti = isset($_POST["sahkoposti"]) ? $_POST["sahkoposti"] : null;
$urheilulaji[] = isset($_POST["urheilulaji[]"]) ? $_POST["urheilulaji[]"] : null;
$ajankohta = isset($_POST["ajankohta"]) ? $_POST["ajankohta"] : null;


 	print "Nimi=$nimi<br>";

 	print "Sähköposti=$sahkoposti<br>";


	 foreach($urheilulaji as $key => $value){
	 	print "Urheilulaji[$key]=$value<br>";
	 } 

 	print "Ajankohta=$ajankohta";


?>

<?php
include("footer.html");
?>