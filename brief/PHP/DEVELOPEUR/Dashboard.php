    <?php
    include "../INCLUDE/Connect.php";
    
    // session_start();
    // echo '<pre>';
    // var_dump($_SESSION);
    // echo '</pre>';

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../CSS/Dash.css">
        <link rel="stylesheet" href="../../CSS/heeader.css">
        <title>dash</title>
    </head>

    <body>
    <?php include_once "../INCLUDE/Dheader.php"; ?>
        <table border="" style="border-collapse: collapse;">
            <thead>
                <th>Nom</th>
                <th>Prenom</th>
            </thead>

            <?php 
         $sql="SELECT * FROM developpeurs ORDER BY nom ";
        foreach ($pdo->query($sql) as $row) :
        ?>
            <tr>
                <td><?php echo $row['nom'] ?></td>
                <td><?php echo $row['prenom'] ?></td>
            </tr>
            <?php endforeach; ?>

        </table>
    </body>

    </html>
    <?php
// // $result is an array, so we can use array functions rather than db vendor functions
// $result=$pdo->query("SELECT * FROM developpeurs ORDER BY nom")->fetchAll();?>