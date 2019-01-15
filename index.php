<?php
//arvud
$nr1 = 2;
$nr2 = 8;
$nr3 = 3.14;
//stringid
$str1 = "a";
$str2 = "b";
$str3 = "2";
//tõeväärtus
$diff = false;

//massiiv
$colors = array ("punane","sinine","kollane");
echo "<h1>Tere Tulemast PHP imelisse maailma!</h1>";
//tegevused numbritega 
echo $nr1+$nr2."<br>"; 

echo $str1.$str2."<br>";    

if($diff == true) {
    echo "Tingimus on täidetud!<br>";
} else {echo "Tingimus ei ole täidetud";}

if($str3 === $nr1){
    echo "On identsed";
} else {echo "kõik on halvasti!<br>";}

echo $colors [0];

for ($i = 0;$i <count($colors);$i++){
    echo $colors[$i]."<br>";}
echo "kohal"
?>