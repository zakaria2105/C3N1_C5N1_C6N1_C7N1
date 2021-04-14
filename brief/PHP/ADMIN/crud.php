<?php
session_start();
if (isset($_SESSION['email'])) {
    include "../INCLUDE/Connect.php";
    include "../INCLUDE/Dheader.php";

    $id = $_GET['id'];

    // get data from techno table
    $sql = "SELECT * FROM techno WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $techno = $stmt->fetch(2);

    // update 
    if (isset($_POST['update'])) {
        $HTML = $_POST['HTML'];
        $JS = $_POST['JS'];
        $AJAX = $_POST['AJAX'];
        $PHP = $_POST['PHP'];
        $CGI = $_POST['CGI'];

        $sql = "UPDATE techno SET HTML = ?, JS = ?, AJAX = ?, PHP = ?, CGI = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $HTML, $JS, $AJAX, $PHP, $CGI, $id,
        ]);
        if ($stmt->rowCount()) {
            header('location: skils.php');
        }
    }
?>

    <section class="crud">
        <form action="" method="POST" class="c-form">
            <label for="techno">HTML :</label><br>
            <input type="number" name="HTML" value="<?= $techno['HTML'] ?>" max="5" min="-1" class="t-input"><br>
            <label for="techno">JS :</label><br>
            <input type="number" name="JS" value="<?= $techno['JS'] ?>" max="5" min="-1" class="t-input"><br>
            <label for="techno">AJAX :</label><br>
            <input type="number" name="AJAX" value="<?= $techno['AJAX'] ?>" max="5" min="-1" class="t-input"><br>
            <label for="techno">PHP :</label><br>
            <input type="number" name="PHP" value="<?= $techno['PHP'] ?>" max="5" min="-1" class="t-input"><br>
            <label for="techno">CGI :</label><br>
            <input type="number" name="CGI" value="<?= $techno['CGI'] ?>" max="5" min="-1" class="t-input"><br>
            <input type="submit" name="update" value="Update" class="edit"></input>
            <a href="skils.php" class="button">Cancel</a>
        </form>
    </section>

<?php
    include "../INCLUDE/footer.php";
} else {
    header('location: login.php');
}
