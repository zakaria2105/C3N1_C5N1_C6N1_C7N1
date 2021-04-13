<!-- Step 1 -->

<?php
// 1
$i = 0;
while ($i <= 10) {
    echo "$i" . "<br>";
    $i++;
}
// 2
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}
// 3
function boucle ($var){
for ($x = 1; $x <= $var; $x++) { echo "the number is: $x <br>" ; } } 
boucle(10);

?>