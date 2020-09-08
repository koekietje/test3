<?php
$tekst= "Jantje zag eens pruimen hangen";
echo $tekst . "<br>";
$lengte = strlen($tekst) + 1;
echo "De zin bestaat uit " . $lengte . " letters.<br>";
$pos = strpos($tekst,'g') + 1;
echo "De zin heeft een g op plaats " . $pos . ".<br>";
$stukje = substr($tekst,8,3);
echo $stukje;
$aantalWoorden = str_word_count($tekst);
echo "onze tekst bestaat uit " . $aantalWoorden . " woorden.";


?>