<?php
session_start();
if (isset($_SESSION['email'])) {
    include "../INCLUDE/Connect.php";
    include "../INCLUDE/Dheader.php";

    $sql = "SELECT * FROM developpeurs";
    $stmt = $pdo->query($sql);
    foreach ($stmt as $val) {
        $val['id'] . '<br>';
    }
    $id = $val['id'];
    $sql = "SELECT * FROM techno WHERE developpeur_id  = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $id,
    ]);
    foreach ($stmt as $row) :
        $row['HTML'];
        $row['JS'];
        $row['AJAX'];
        $row['PHP'];
        $row['CGI'];
    endforeach;

?>
    <section class="progress">
        <h3> HTML : <?= $row['HTML']; ?></h3>
        <progress max="5" value="<?= $row['HTML']; ?>"></progress><br>
        <h3> JS : <?= $row['JS']; ?></h3>
        <progress max="5" value="<?= $row['JS']; ?>"></progress><br>
        <h3> AJAX : <?= $row['AJAX']; ?></h3>
        <progress max="5" value="<?= $row['AJAX']; ?>"></progress><br>
        <h3> PHP : <?= $row['PHP']; ?></h3>
        <progress max="5" value="<?= $row['PHP']; ?>"></progress><br>
        <h3> CGI : <?= $row['CGI']; ?></h3>
        <progress max="5" value="<?= $row['CGI']; ?>"></progress><br>
    </section>

<?php include "../INCLUDE/footer.php";
} else {
    header('location: index.php');
}
