<?php
// 1
echo "<table>";

$month = array("1" => "janvier", "2" => "Février", "3" => "Mars", "4" => "Avril", "5" => "Mai", "6" => "Juin", "7" => "Juillet", "8" => "Aout", "9" => "Septembre", "10" => "octobre", "11" => "Novembre", "12" => "Décembre");
echo "<table border=1>";
foreach ($month as $x => $x_value){
    echo "<tr><td>".$x."</td><td>".$x_value."</td></tr>";

}
echo "</table>";
echo "<hr>";
// 2

?>
<hr>
<?php

//Fonction 
function affichtable($month){
    echo "<table border=1>";
    foreach ($month as $x => $x_value){
        echo "<tr><td>".$x."</td><td>".$x_value."</td></tr>";
    }
    echo "</table>";
}

//** */
//Déclaration tableau
// $month = array("cle" => "value", "said" => "13", "badr" => "16", "najat" => "15",);
$month = array("said" => "13", "badr" => "16", "najat" => "15",);
// Afficher Tableau 
affichtable($month);
echo"<hr>";
//Insertion
// $month["karim"] ="10";
$month=array_merge($month, ["karim" => 10]);
affichtable($month);
echo"<hr>";

//Afficher Tableau 
affichtable($month);
echo"<hr>";
// unset($month[ "said"]);
// array_shift($month);
// affichtable($month);
// echo"<hr>";
// delete
// unset($month["badr"]);
// affichtable($month);
// echo"<hr>";
// max et min
// Calcul note maximal t la note minimale
affichtable($month);
echo"<hr>";
    echo "la note maximale est: ".max($month);
echo"<br>";
    echo "la note minimale est:".min($month);
 

// sort
ksort($month);
affichtable($month);
echo"<hr>";
asort($month);
affichtable($month);
echo"<hr>";
affichtable($month);
echo"la moyenne de la classe:".round(array_sum($month)/count($month),3);
echo array_sum($month);
echo"<hr>";