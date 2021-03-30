<?php
include "../INCLUDE/Connect.php";

if(isset($_POST['submit'])){
    $dev = $_POST['developpeurs'];  // Storing Selected Value In Variable
    $techno = $_POST['techno'];
    $sdate = $_POST['date'];
    // $date = date("d-m-y", strtotime($sdate));

    $sql = "INSERT INTO `formation` (`developpeur_id`, `techno`, `DATE`) VALUES (?, ?, ?);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $dev,
        $techno,
        $sdate,
    ]);
    if($stmt->rowCount()){
        echo 'good';
    }
    // echo "You have selected :" .$dev.'<br>';  // Displaying Selected Value
    // echo "You have selected :" .$techno.'<br>';  // Displaying Selected Value
    // echo "You have selected :" .$date.'<br>';  // Displaying Selected Value
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/formation.css">
    <link rel="stylesheet" href="../../CSS/dash.css">
    <link rel="stylesheet" href="../../CSS/heeader.css">
    <title>Formation</title>
</head>
<body>
<?php include_once "../INCLUDE/Dheader.php"; ?>
        <h1>Liste of developers with formation</h1>
        <table border="" style="border-collapse: collapse;">
            <thead>
                <th>#</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Techno</th>
                <th>Date</th>
                <th>Delete</th>
            </thead>
            <?php 
            $i = 1;
    $sql="SELECT * FROM developpeurs INNER JOIN Formation ON developpeurs.id = formation.developpeur_id ORDER BY date";
    foreach ($pdo->query($sql) as $row) : ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $row['nom'] ?></td>
                <td><?php echo $row['prenom'] ?></td>
                <td><?php echo $row['techno'] ?></td>
                <td><?php echo $row['date'] ?></td>
                <td>
                <a href="deletef.php?id=<?php echo  $row['id']?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

    <form action="" method="POST" class="formation">
    <label for="techno">Select The Developpeur :</label>
        <select name="developpeurs">
            <?php 
                    $sql="SELECT * FROM developpeurs";
                    $stmt = $pdo->query($sql);
                    $result = $stmt->fetchAll(2);
                    foreach ($result as $row){
                        echo "<option value='$row[id]'>$row[nom] $row[prenom]</option>";
                    }
            ?>
        </select><br>
        <label for="techno">Select The Techno :</label>
        <select name="techno" id="techno">
            <option value="HTML">HTML</option>
            <option value="JS">JS</option>
            <option value="AJAX">AJAX</option>
            <option value="PHP">PHP</option>
            <option value="CGI">CGI</option>
    </select><br>
    <label for="techno">Select The Date :</label>
    <input type="date" name="date"><br>
        <input type="submit" name="submit" value="Save" />
    </form>

</body>
</html>


