<?php

$email="koencd@gmail.com";
$positie1 = strpos($email,"@");
$positie1 +=1;
$positie2 = strpos($email,".");
$aantalLetters = $positie2-$positie1;


$provider = substr($email,$positie1,$aantalLetters);
echo $provider;


?>