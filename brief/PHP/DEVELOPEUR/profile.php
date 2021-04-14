<?php
session_start();
if (isset($_SESSION['email'])) {
    include_once "../INCLUDE/Connect.php";
    include_once "../INCLUDE/Dheader.php";
    $sql = "SELECT * FROM developpeurs WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['email']]);
    $row = $stmt->fetch(2);
?>

    <section class="profile">
        <form action="" method="POST" class="p-form">
            <label for="FirstName">First Name :</label>
            <input type="text" name="FirstName" value="<?= $row['FirstName'] ?>">
            <label for="LastName">Last Name :</label>
            <input type="text" name="LastName" value="<?= $row['LastName'] ?>">
            <label for="email">Email :</label>
            <input type="email" name="email" value="<?= $row['email'] ?>">
        </form>
    </section>

<?php
    include_once "../INCLUDE/footer.php";
} else {
    header('location: index.php');
}
?>