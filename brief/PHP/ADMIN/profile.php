<?php
session_start();
if (isset($_SESSION['email'])) {
    include_once "../INCLUDE/Connect.php";
    include_once "../INCLUDE/Dheader.php";
    $sql = "SELECT * FROM admin WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['email']]);
    $row = $stmt->fetch(2);
    // echo '<pre>';
    // var_dump($row);
    // echo '</pre>';
    // echo '<pre>';
    // var_dump($row['FirstName']);
    // echo '</pre>';
    // echo '<pre>';
    // var_dump($_SESSION['email']);
    // echo '</pre>';
?>

    <section class="profile">
        <form action="" method="POST" class="p-form">
            <label for="FirstName">First Name :</label>
            <input type="text" value="<?= $row['FirstName'] ?>" name="FirstName" autocomplete="off">
            <label for="LastName">Last Name :</label>
            <input type="text" value="<?= $row['LastName'] ?>" name="LastName">
            <label for="email">Email :</label>
            <input type="email" value="<?= $row['email']  ?>" name="email" autocomplete="off">
            <label for="password">Password :</label>
            <input type="password" name="password">
        </form>
    </section>



<?php
    include_once "../INCLUDE/footer.php";
} else {
    header('location: login.php');
}
?>