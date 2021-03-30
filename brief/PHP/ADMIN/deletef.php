<?php
include "../INCLUDE/Connect.php";
$id = $_GET['id'];
var_dump($id);
$sql = "DELETE FROM formation WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $id,
]);
if($stmt->rowCount()){
    header('location: formation.php');  
}
