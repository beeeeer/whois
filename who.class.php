<?php
/**
 * Created by PhpStorm.
 * User: Adam Nowak
 * Date: 23.03.15
 * Time: 20:35
 */
class Whois {

    private $ipadress;

    public function __construct($ipadress)
{

$this->ipadress = $ipadress;

}

public function whois($ipadress)
{
 $result = gethostbyname($ipadress);
    $domena = gethostbyaddr($result);

    echo '<br><a href="http://www.bigduo.pl/szukaj/wizyty/index.php?zn=whois&domain='.$result.'" target="_blank">Sprawdz '.$domena.'</a>';
 }




}