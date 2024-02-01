<?php
mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);
try{
    $yhteys=mysqli_connect("db", "root", "password", "henkilo");
}
catch(Exception $e){
    header("Location: yhteysvirhe.html");
    exit;
}
$tulos=mysqli_query($yhteys, "select * from henkilo");

while ($rivi=mysqli_fetch_object($tulos)){
    $henkilo=new class{};
    $henkilo->id=$rivi->id;
    $henkilo->etunimi=$rivi->etunimi;
    $henkilo->sukunimi=$rivi->sukunimi;
    $henkilot[]=$henkilo;
}
mysqli_close($yhteys);
print json_encode($henkilot);
?>