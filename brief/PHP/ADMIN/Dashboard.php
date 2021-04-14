    <?php
    session_start();
    if (isset($_SESSION['email'])) {
        include "../INCLUDE/Connect.php";
        include "../INCLUDE/Dheader.php";
        $pagetitle = 'Dashboard';

        $sql = "SELECT FirstName, LastName FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE HTML = 5 OR JS = 5 OR AJAX = 5 OR PHP = 5 OR CGI = 5";
        $stmt = $pdo->query($sql);
        $numex = $stmt->rowCount();

        $sql = "SELECT * FROM developpeurs";
        $stmt = $pdo->query($sql);
        $numdev = $stmt->rowCount();
    ?>
        <section class="stats">
            <article class="total-dev">
                <h3> Number Total Of Developers : <?= $numdev ?></h3>
            </article>
            <article class="liste-exp">
                <h3> Number Of Experte Developers : <?= $numex ?></h3>
            </article>
        </section>
        <h1>List Of Developers</h1>
        <table>
            <thead>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Action</th>
            </thead>
            <?php
            $i = 1;
            $sql = "SELECT * FROM developpeurs";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            foreach ($stmt as $row) : ?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo ucfirst($row['FirstName']) ?></td>
                    <td><?php echo ucfirst($row['LastName'])  ?></td>
                    <td>
                        <a href="delete.php?id=<?= $row['id'] ?>" class="delete">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php include "../INCLUDE/footer.php";
    } else {
        header('location: login.php');
    }
