<?php
session_start();
if (isset($_SESSION['email'])) {

    include '../INCLUDE/Connect.php';
    include_once '../INCLUDE/Dheader.php';
?>

    <h1 class="titre">List of Developers With Their Level</h1>
    <a href="static.php" class="edit back">Statistics</a>
    <table>
        <thead>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>HTML</th>
            <th>JS</th>
            <th>AJAX</th>
            <th>PHP</th>
            <th>CGI</th>
            <th>Edit</th>
        </thead>

        <?php
        $i = 1;
        $sql =
            'SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id';
        foreach ($pdo->query($sql) as $row) : ?>

            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['FirstName']; ?></td>
                <td><?php echo $row['LastName']; ?></td>
                <td><?php echo $row['HTML']; ?></td>
                <td><?php echo $row['JS']; ?></td>
                <td><?php echo $row['AJAX']; ?></td>
                <td><?php echo $row['PHP']; ?></td>
                <td><?php echo $row['CGI']; ?></td>
                <td>
                    <a href="crud.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a>
                </td>
            </tr>
        <?php endforeach;
        ?>
    </table>
    <section class="modal-container" id="modal">
        <div class="modal">
            <h3 class="m-title">Add Formation</h3>
            <hr>
            <form action="" method="POST">
                <label for="techno">HTML :</label><br>
                <input type="number" name="HTML" max="5" min="-1" class="t-input"><br>
                <label for="techno">JS :</label><br>
                <input type="number" name="JS" max="5" min="-1" class="t-input"><br>
                <label for="techno">AJAX :</label><br>
                <input type="number" name="AJAX" max="5" min="-1" class="t-input"><br>
                <label for="techno">PHP :</label><br>
                <input type="number" name="PHP" max="5" min="-1" class="t-input"><br>
                <label for="techno">CGI :</label><br>
                <input type="number" name="CGI" max="5" min="-1" class="t-input"><br>
                <input type="submit" name="submit" value="Edit" class="edit"></input>
                <button id="close" class="button">Cancel</button>
            </form>
        </div>
    </section>

<?php include_once '../INCLUDE/footer.php';
} else {
    header('location: login.php');
}
?>