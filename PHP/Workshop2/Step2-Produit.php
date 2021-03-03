<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="step2-produit.php" method="POST">
        <input type="text" name="a" placeholder="entrer a">
        <input type="text" name="b" placeholder="entrer b">
        <button type="valider">valider</button>
    </form>
    <?php
if(!empty($_POST)) {
$a = $_POST["a"];
$b = $_POST["b"];
echo "<table border=1>";
for ($i=1 ; $i<=$a ; $i++) {
    echo "<tr>";
    for ($j=1 ; $j<=$b ; $j++) {
        echo "<td>".$i*$j."</td>" ;
    }
    echo "</tr>";
}
}
echo "</table>";

?>
</body>

</html>