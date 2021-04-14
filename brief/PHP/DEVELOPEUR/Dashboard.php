    <?php
    session_start();

    if (isset($_SESSION['email'])) {
        include "../INCLUDE/Connect.php";
        include "../INCLUDE/Dheader.php";
    ?>
        <h1>List Of Developers</h1>
        <table>
            <thead>
                <th>First Name</th>
                <th>Last Name</th>
            </thead>

            <?php
            $sql = "SELECT * FROM developpeurs ORDER BY FirstName ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            foreach ($stmt as $row) :
            ?>
                <tr>
                    <td><?php echo $row['FirstName'] ?></td>
                    <td><?php echo $row['LastName'] ?></td>
                </tr>
            <?php endforeach; ?>

        </table>
    <?php include "../INCLUDE/footer.php";
    } else {
        header('location: index.php');
    }
