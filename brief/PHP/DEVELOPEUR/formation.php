<?php
include "../INCLUDE/Connect.php";
$sql = "SELECT * FROM developpeurs";

    $stmt = $pdo->query($sql);
    foreach($stmt as $val){
        $val['id'] . '<br>';
    }
    $id = $val['id'];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../CSS/dash.css">
        <link rel="stylesheet" href="../../CSS/heeader.css">
        <title>dash</title>
    </head>

    <body>
    <?php include_once "../INCLUDE/Dheader.php"; ?>

    
        <h1>List Of Developers</h1>
    <table border="" style="border-collapse: collapse;">
            <thead>
                <th>#</th>
                <th>Techno</th>
                <th>Date</th>
            </thead>
            <?php 
            $i = 1;
    $sql="SELECT * FROM formation WHERE developpeur_id  = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $id,
    ]);
    foreach ($stmt as $row) : ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $row['techno'] ?></td>
                <td><?php echo $row['date'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>

    </body>

    </html>
