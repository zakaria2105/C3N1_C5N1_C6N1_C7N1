<?php 
// 1
echo "les nombres premiers";
echo "<br/>";
function nombrepremier( $nombre ){
    for ($i = 2; $i < $nombre; $i++){
        if ($nombre % $i == 0){
            $fois = 1;
        }
    }
    if (isset($fois)) {
        echo "$nombre n'est pas un nombre premier";
    }
    else{
        echo "$nombre est un nombre premier";
    }
}
nombrepremier(7901);
echo "<br/>";
nombrepremier(10);
echo "<br/>";
nombrepremier(3);
echo "<hr/>";
// 2
echo "La carre d’un nombre";
echo "<br/>";
function carre($n){
     return $n*$n;
 }
 echo carre(20);
 echo "<hr>";
//  3
echo "Le logarithme népérien d’un nombre";
echo "<br/>";
 function logarithme($a){
      return log($a);
 }
 echo logarithme(10);
 echo "<hr>";
//  4
echo "La racine Carrée d’un nombre";
echo "<br/>";
 function racin_carre($r){
     return sqrt($r);

 }
 echo racin_carre(36);

?>