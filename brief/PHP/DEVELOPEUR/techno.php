<?php
include "../INCLUDE/Connect.php";
$sql = "SELECT * FROM developpeurs";

$stmt = $pdo->prepare($sql);
$stmt->execute();
foreach ($stmt as $val) {
    $val['id'] . '<br>';
}

$id = $val['id'];
$_SESSION['id'] = $id;
if (isset($_POST['send'])) {
    if (isset($_POST['HTML']) && isset($_POST['JS']) && isset($_POST['AJAX']) && isset($_POST['PHP']) && isset($_POST['CGI'])) {
        $HTML = $_POST['HTML'];
        $JS = $_POST['JS'];
        $AJAX = $_POST['AJAX'];
        $PHP = $_POST['PHP'];
        $CGI = $_POST['CGI'];

        $sql = "INSERT INTO techno (HTML, JS, AJAX, PHP, CGI, developpeur_id) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $HTML,
            $JS,
            $AJAX,
            $PHP,
            $CGI,
            $id,
        ]);
        if ($stmt->rowCount()) {
            header('location: index.php');
        }
    } else {
        echo "<script> alert ('All Field Requirde ');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/main.css">
    <link rel="stylesheet" href="../../CSS/normalize.css">
    <title>formation</title>
</head>

<body>
    <form action="" method="POST" class="formation">
        <div class="teckno">
            <h4 class="f-h4">HTML</h4>
            <label for="0">Niveau 0 :</label>
            <input class="f-input" type="radio" name="HTML" value="0"><br>
            <label for="1">Niveau 1 :</label>
            <input class="f-input" type="radio" name="HTML" value="1"><br>
            <label for="2">Niveau 2 :</label>
            <input class="f-input" type="radio" name="HTML" value="2"><br>
            <label for="3">Niveau 3 :</label>
            <input class="f-input" type="radio" name="HTML" value="3"><br>
            <label for="4">Niveau 4 :</label>
            <input class="f-input" type="radio" name="HTML" value="4"><br>
            <label for="5">Niveau 5 :</label>
            <input class="f-input" type="radio" name="HTML" value="5"><br>
            <label for="-1">Niveau -1 :</label>
            <input class="f-input" type="radio" name="HTML" value="-1"><br>
        </div>
        <div class="teckno">
            <h4 class="f-h4">JS</h4>
            <label for="0">Niveau 0 :</label>
            <input class="f-input" type="radio" name="JS" value="0"><br>
            <label for="1">Niveau 1 :</label>
            <input class="f-input" type="radio" name="JS" value="1"><br>
            <label for="2">Niveau 2 :</label>
            <input class="f-input" type="radio" name="JS" value="2"><br>
            <label for="3">Niveau 3 :</label>
            <input class="f-input" type="radio" name="JS" value="3"><br>
            <label for="4">Niveau 4 :</label>
            <input class="f-input" type="radio" name="JS" value="4"><br>
            <label for="5">Niveau 5 :</label>
            <input class="f-input" type="radio" name="JS" value="5"><br>
            <label for="-1">Niveau -1 :</label>
            <input class="f-input" type="radio" name="JS" value="-1"><br>
        </div>
        <div class="teckno">
            <h4 class="f-h4">AJAX</h4>
            <label for="0">Niveau 0 :</label>
            <input class="f-input" type="radio" name="AJAX" value="0"><br>
            <label for="1">Niveau 1 :</label>
            <input class="f-input" type="radio" name="AJAX" value="1"><br>
            <label for="2">Niveau 2 :</label>
            <input class="f-input" type="radio" name="AJAX" value="2"><br>
            <label for="3">Niveau 3 :</label>
            <input class="f-input" type="radio" name="AJAX" value="3"><br>
            <label for="4">Niveau 4 :</label>
            <input class="f-input" type="radio" name="AJAX" value="4"><br>
            <label for="5">Niveau 5 :</label>
            <input class="f-input" type="radio" name="AJAX" value="5"><br>
            <label for="-1">Niveau -1 :</label>
            <input class="f-input" type="radio" name="AJAX" value="-1"><br>
        </div>
        <div class="teckno">
            <h4 class="f-h4">PHP</h4>
            <label for="0">Niveau 0 :</label>
            <input class="f-input" type="radio" name="PHP" value="0"><br>
            <label for="1">Niveau 1 :</label>
            <input class="f-input" type="radio" name="PHP" value="1"><br>
            <label for="2">Niveau 2 :</label>
            <input class="f-input" type="radio" name="PHP" value="2"><br>
            <label for="3">Niveau 3 :</label>
            <input class="f-input" type="radio" name="PHP" value="3"><br>
            <label for="4">Niveau 4 :</label>
            <input class="f-input" type="radio" name="PHP" value="4"><br>
            <label for="5">Niveau 5 :</label>
            <input class="f-input" type="radio" name="PHP" value="5"><br>
            <label for="-1">Niveau -1 :</label>
            <input class="f-input" type="radio" name="PHP" value="-1"><br>
        </div>
        <div class="teckno">
            <h4 class="f-h4">CGI</h4>
            <label for="0">Niveau 0 :</label>
            <input class="f-input" type="radio" name="CGI" value="0"><br>
            <label for="1">Niveau 1 :</label>
            <input class="f-input" type="radio" name="CGI" value="1"><br>
            <label for="2">Niveau 2 :</label>
            <input class="f-input" type="radio" name="CGI" value="2"><br>
            <label for="3">Niveau 3 :</label>
            <input class="f-input" type="radio" name="CGI" value="3"><br>
            <label for="4">Niveau 4 :</label>
            <input class="f-input" type="radio" name="CGI" value="4"><br>
            <label for="5">Niveau 5 :</label>
            <input class="f-input" type="radio" name="CGI" value="5"><br>
            <label for="-1">Niveau -1 :</label>
            <input class="f-input" type="radio" name="CGI" value="-1"><br>
        </div>
        <input class="f-submit button" name="send" type="submit" value="send">
    </form>
</body>

</html>