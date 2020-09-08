<?php


$email = "                     koenraad@tubbax.be";
$email = trim($email);
$positie = strpos($email,'@');


if(!$positie){
    echo "Het @-teken komt niet voor";
}else{
    $provider=substr($email,$positie+1);
    echo "Het @-teken bevindt zich op plaats " . $positie . "<br>"; 
    echo "De provider is " . $provider;

}


?>