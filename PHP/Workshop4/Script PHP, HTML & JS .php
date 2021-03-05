<!-- 1 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <input type="datetime-local" id="meeting-time" name="date">
        <button type="submit">submit</button>
    </form>

</body>

</html>
<?php

function verification_date($date) {
    echo substr($date, 0,10) ;
    echo "<br>";
    echo substr($date, 11) ;
}
if(!empty($_POST)) {
$date=$_POST["date"];
verification_date($date);
}
// $date = strtotime($_POST["date"]); 
// echo date('Y/m/d h:i', $date);
?>
<!-- 2 -->
<?php
function boîtedalerte ($a){
 echo "<script>alert('hello $a')</script>";
}
boîtedalerte("samira");
?>
<!-- 3 -->