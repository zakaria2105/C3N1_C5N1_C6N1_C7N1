<?php
$couleur = array ('blanc', 'vert', 'rouge', 'bleu', 'noir');
echo "Le souvenir de cette scène pour moi est comme une trame de film à jamais figée à ce moment-là: <br/>
 le tapis <strong>$couleur[2]</strong>, la pelouse <strong>$couleur[1]</strong>, la maison <strong>$couleur[3]</strong>, le ciel plombé. Le nouveau président et son première dame. - Richard M. Nixon" ; 
?>
<br>
<hr>
<?php
$ceu = array ("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Bruxelles", "Denmark" => "Copenhague", "Finland" => "Helsinki "," France "=>" Paris ",
" Slovaquie "=>" Bratislava "," Slovénie "=>" Ljubljana "," Allemagne "=>" Berlin "," Grèce "=>" Athènes "," Irlande " => "Dublin", "Netherlands" => "Amsterdam",

"Portugal" => "Lisbonne", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "Londres "," Chypre "=>" Nicosie "," Lituanie "=>"Vilnius ",
" République tchèque "=>" Prague "," Estonie "=>" Tallin "," Hongrie "=>" Budapest "," Lettonie "=>" Riga "," Malte "=>" La Valette "," Autriche "=>" Vienne "," Pologne "=>" Varsovie "); 
foreach($ceu as $x => $x_value) {
    echo "La capitale des" . $x . "est" . $x_value;
    echo "<br>";
  }


?>
