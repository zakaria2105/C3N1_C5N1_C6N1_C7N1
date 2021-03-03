<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First</title>
</head>

<body>
    <?php
        echo "Hello  \n";
    ?>
</body>

</html>

<!-- Affichage de code HTML -->
<?php
    echo "<h1> PHP </h1>";
?>

<!-- Affichage de la date -->
<?php
    echo date('Y-m-d H:i:s');
    echo date('l j F Y, H:i'); 
    echo date('d F Y');
    echo date('d/m/Y');
?>

<!-- Variable stextes et numériques -->
<?php
    
    $title = "PHP";
    $phrase = "Hello World";
?>

<p>
    <?php
        echo "$phrase";
    ?>
</p>