<?php
include "../INCLUDE/Connect.php";
$id = $_GET['id'];
$sql = "SELECT * FROM techno WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $id,
]);
foreach($stmt as $row){
    $row['HTML'];
    $row['JS'];
    $row['AJAX'];
    $row['PHP'];
    $row['CGI'];
}
$HTML = $row['HTML'];
$JS = $row['JS'];
$AJAX = $row['AJAX'];
$PHP = $row['PHP'];
$CGI = $row['CGI'];

if (isset($_POST['edit'])) {
    if(isset($_POST['HTML'])){
        $HTML = $_POST['HTML'];
        if(isset($_POST['JS'])){
            $JS = $_POST['JS'];
            if(isset($_POST['AJAX'])){
                $AJAX = $_POST['AJAX'];
                if(isset($_POST['PHP'])){
                    $PHP = $_POST['PHP'];
                    if(isset($_POST['CGI'])){
                        $CGI = $_POST['HTML'];
                        $sql = "UPDATE techno SET HTML = ?, JS = ?, AJAX = ?, PHP = ?, CGI = ? WHERE id = ?";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute([
                            $HTML,
                            $JS,
                            $AJAX,
                            $PHP,
                            $CGI,
                            $id,
                            ]);
                            if($stmt->rowCount()){
                                header('location: listetechno.php');   
                            }
                    }else{
                        $CGI = $row['CGI'];
                        $sql = "UPDATE techno SET HTML = ?, JS = ?, AJAX = ?, PHP = ?, CGI = ? WHERE id = ?";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute([
                            $HTML,
                            $JS,
                            $AJAX,
                            $PHP,
                            $CGI,
                            $id,
                            ]);
                            if($stmt->rowCount()){
                                header('location: listetechno.php');   
                            }
                    }
                }else{
                    $PHP = $row['PHP'];
                }
            }else{
                $AJAX = $row['AJAX'];
            }
        }else{
            $JS = $row['JS'];
        }
    }else{
        $HTML = $row['HTML'];
    }
}
/************************************************************************ */
// if (isset($_POST['edit'])) {
//     if(isset($_POST['HTML']) && isset($_POST['JS']) && isset($_POST['AJAX']) && isset($_POST['PHP']) && isset($_POST['CGI'])){
//         $HTML = $_POST['HTML'];
//         $JS = $_POST['JS'];
//         $AJAX = $_POST['AJAX'];
//         $PHP = $_POST['PHP'];
//         $CGI = $_POST['CGI'];

//         $sql = "UPDATE techno SET HTML = ?, JS = ?, AJAX = ?, PHP = ?, CGI = ? WHERE id = ?";
//         $stmt = $pdo->prepare($sql);
//         $stmt->execute([
//             $HTML,
//             $JS,
//             $AJAX,
//             $PHP,
//             $CGI,
//             $id,
//             ]);
//             if($stmt->rowCount()){
//                 header('location: listetechno.php');   
//             }
//     }else{
//         $HTML = $row['HTML'];
//         $JS = $row['JS'];
//         $AJAX = $row['AJAX'];
//         $PHP = $row['PHP'];
//         $CGI = $row['CGI'];
//         var_dump($CGI);
//         $sql = "UPDATE techno SET HTML = ?, JS = ?, AJAX = ?, PHP = ?, CGI = ? WHERE id = ?";
//         $stmt = $pdo->prepare($sql);
//         $stmt->execute([
//             $HTML,
//             $JS,
//             $AJAX,
//             $PHP,
//             $CGI,
//             $id,
//             ]);
//             if($stmt->rowCount()){
//                 header('location: listetechno.php');   
//             }

//     }
    
// }
var_dump($CGI);

/******************************** */
// $sql = "UPDATE techno SET HTML = ?, JS = ?, AJAX = ?, PHP = ?, CGI = ? WHERE id = ?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([
//     $HTML,
//     $JS,
//     $AJAX,
//     $PHP,
//     $CGI,
//     $id,
//     ]);
//     if($stmt->rowCount()){
//         header('location: listetechno.php');   
// var_dump($id);
// $sql = "UPDATE techno SET HTML = '6', JS = '7', AJAX = '8', PHP = '9', CGI = '0' WHERE id = ?; ";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([
//     $id,
// ]);
// if($stmt->rowCount()){
//     header('location: formation.php');  
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/techno.css">
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
        <input class="f-submit" name="edit" type="submit" value="Edit">
    </form>
</body>

</html>

