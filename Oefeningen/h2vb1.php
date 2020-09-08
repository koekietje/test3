<?php
$naam = "kok";
$omgekeerd = strrev($naam);
echo $naam . " is omgekeerd " . $omgekeerd .".<br>";

$palindroom = false;
if($naam == $omgekeerd){
    $palindroom = true;
}else{
    $palindroom = false;
}

if($palindroom){
    echo "Dit is een palindroom";
}else{
    echo "Dit is geen palindroom";
}

?>