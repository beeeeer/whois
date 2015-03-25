<?php
/**
 * Created by PhpStorm.
 * User: Adam Nowak
 * Date: 23.03.15
 * Time: 20:34
 */


echo '<form method="get">
      <input type="text" name="domain"></input>
      <input type="submit">
      </form>';
require 'who.class.php';
$domain = $_GET['domain'];
echo $domain;

$who  = new Whois;
$who->whois($domain);




