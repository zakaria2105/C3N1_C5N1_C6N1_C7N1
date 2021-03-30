    <?php
include "../INCLUDE/Connect.php";
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

    <?php 
    // $sql ="SELECT nom, prenom FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE HTML = 5 OR JS = 5 OR AJAX = 5 OR PHP = 5 OR CGI = 5";
    // $stmt = $pdo->query($sql);
    // $numex = $stmt->rowCount();
    // var_dump($numex)
    ?>
          <?php 
        $sql ="SELECT * FROM developpeurs";
        $stmt = $pdo->query($sql);
        $numdev = $stmt->rowCount();
        ?>
        <h1>List Of Developers</h1>
      <table border="" style="border-collapse: collapse;">
            <thead>
                <th>#</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Action</th>
            </thead>
            <?php 
            $i = 1;
    $sql="SELECT * FROM developpeurs";
    foreach ($pdo->query($sql) as $row) : ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $row['nom'] ?></td>
                <td><?php echo $row['prenom'] ?></td>
                <td>
                <a href="delete.php?id=<?php echo  $row['id']?>">delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p> nombre Total Of Developers : <?php echo $numdev ?></p>

    </body>

    </html>
