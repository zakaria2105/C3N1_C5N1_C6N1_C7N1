<?php
// Chaine de caractéres 
$string = "bonjour Youcode";
echo $string;
echo"<br/>";
// Varable contenant un entier
$int = 46;
echo $int;
echo"<br/>";
// une chaîne de caractères faisant apparaître une variable 
$var = "YouCode";
echo "bonjour " . $var . " 2020";
echo"<br/>";
// un texte différent selon qu'une condition est vraie ou fausse
$text = false;
if($text == true) {
    echo "bonjour youcode";
}
else{
    echo "by youcode";
}