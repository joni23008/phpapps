<?php
$json=isset($_POST["henkilo"]) ? $_POST["henkilo"] : "";
if (!($henkilo=tarkistaJson($json))){
    print "Täytä kaikki kentät";
    exit;
}
mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try{
    $yhteys=mysqli_connect("db", "root", "password", "henkilo");
}
catch(Exception $e){
    print "Yhteysvirhe";
    exit;
}
//Tehdään sql-lause, jossa kysymysmerkeillä osoitetaan paikat
//joihin laitetaan muuttujien arvoja
$sql="insert into henkilo (etunimi, sukunimi) values(?, ?)";
//Valmistellaan sql-lause
$stmt=mysqli_prepare($yhteys, $sql);
//Sijoitetaan muuttujat oikeisiin paikkoihin
mysqli_stmt_bind_param($stmt, 'ss', $henkilo->etunimi, $henkilo->sukunimi);
//Suoritetaan sql-lause
mysqli_stmt_execute($stmt);
//Suljetaan tietokantayhteys
mysqli_close($yhteys);
print $json;
?>
<?php
function tarkistaJson($json){
    if (empty($json)){
        return false;
    }
    $henkilo=json_decode($json, false);
    if (empty($henkilo->etunimi) || empty($henkilo->sukunimi)){
        return false;
    }
    return $henkilo;
}
?>

<!--kala    Kala     -->