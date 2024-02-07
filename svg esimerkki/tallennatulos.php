<?php

/*
 * Kun php-ohjelmassa käytetään sessioita, aloitetaan 
 * ohjelma lauseella session_start();
 * 
 * $_SESSION on taulukko, johon voidaan sijoittaa arvoja, jotka
 * säilyvät pyyntöjen välillä. Oletusaika, jonka sessio säilyy, on 30 _noin_ minuuttia
 * ilman, että sessiota käytetään. Kyseessä ns. inactiveinterval.
 */
session_start();

/*
 * Luetaan html-tiedostolta saatu arvo. Ks. html:ssä olevat jQueryllä tehdyt Ajax-pyynnöt.
 */
$value = isset($_POST["value"]) ? $_POST["value"] : null;

if ($value !== null) {
    /*
     * Tässä ohjelmassa kerätään html-tiedostosta saatuja nappien painalluksia sessioon.
     * $_SESSION taulukon indeksin no, about tai yes (muista, että php:ssä taulukot ovat ns. 
     * assosiatiivisia taulukoita ja indeksi voivat olla muutakin kuin kokonaislukuja) arvoa
     * kasvatetaan aina yhdellä kun kyseisestä nappulaa on klikattu html-tiedostossa.
     */

    // Alla olevassa lauseessa sijoitetaan $_SESSION taulukon indeksille no, about tai yes
    // siinä olevaa arvoa yhtä suurempi arvo, jos sellainen taulukon arvo on jo olemassa,
    // muutoin annetaan arvo 1 - tämä siis ensimmäisellä kerralla.
    // Indeksi no, about tai yes saadaan html-tiedoston attribuutilla value lähettämästä pyynnöstä.
    $_SESSION[$value] = (isset($_SESSION[$value]) ? $_SESSION[$value] + 1 : 1);
}


/*
 * Alla olevilla lauseilla luetaan $_SESSIOn taulukossa olevat arvot indekseiltä
 * no, about ja yes erillisiin muuttujiin, jotta tulostuslause olisi lyhyempi.
 * Tässäkin on käytetty ehtolauseen (if-else) lyhyttä muotoa:
 * Jos (on olemassa $_SESSION["no"]){
 * 	muuttuja $no saa arvon $_SESSION["no"]
 * }
 * {
 * muutoin se saa arvon 0.
 * }
 * 
 * Ja vielä toisin:
 *  
 * if (isset($_SESSION["no"])){
 * 		$no=$_SESSION["no"]+1;
 * }
 * else{
 * 		$no=0;
 * }
 * 
 * Ja toisille muuttujille sama....
 */
$no=(isset($_SESSION["no"]) ? $_SESSION["no"] : 0);
$about=(isset($_SESSION["about"]) ? $_SESSION["about"] : 0);
$yes=(isset($_SESSION["yes"]) ? $_SESSION["yes"] : 0);

/*
 * Tässä ohjelma tulostaa tekstin, joka sitten sijoitetaan html-tiedostossa
 * div-elementin tulos sisällöksi. Tulostus voi olla esimerkiksi
 * no=2 about=8 yes=200
 * jos no nappia on painettu kaksi kertaa, about nappia 8 kertaa ja yes nappia 200 kertaa.
 */
print "no=$no about=$about yes=$yes";


?>