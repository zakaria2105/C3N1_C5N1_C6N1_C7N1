<?php
session_start();
if (isset($_SESSION['email'])) {
    include "../INCLUDE/Connect.php";
    include "../INCLUDE/Dheader.php";

    $sql = "SELECT * FROM developpeurs";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    foreach ($stmt as $val) {
        $val['id'] . '<br>';
    }
    $id = $val['id'];
?>

    <h1>List Of formation</h1>
    <table>
        <thead>
            <th>#</th>
            <th>Techno</th>
            <th>Date</th>
        </thead>
        <?php
        $i = 1;
        $sql = "SELECT * FROM formation WHERE developpeur_id  = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id,]);
        foreach ($stmt as $row) : ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $row['techno'] ?></td>
                <td><?php echo $row['date'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php include "../INCLUDE/footer.php";
} else {
    header('location: index.php');
}
