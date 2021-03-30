<?php
  
  include "../INCLUDE/Connect.php";
  session_start();

  if(isset($_SESSION['email'])){
      header("location:Dashboard.php");
  }

  if(isset($_POST['login'])) {
    $email =  $_POST['email'];
    $password =  $_POST['password'];
    if(empty($email)){
      echo "<script> alert ('Email vide'); </script>";
    }else{
      if(empty($password)){
          echo "<script> alert ('Password vide'); </script>";
      }else{
        $sql = "SELECT email, password FROM developpeurs WHERE email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
          $email,
          ));
        if($stmt->rowCount()){
          if(password_verify($password,$stmt->fetch()['password'])){
            $_SESSION['email'] = $email;
            header('location: Dashboard.php');   
          }else{
            echo "<script> alert ('password Wrong'); </script>";
          }
        }else{
          echo 'email not existe';
        }
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/index.css">
    <title>login</title>
</head>

<body>
    <section class="login" id="login">
        <form class="l-form" action="" method="POST">
            <label class="l-input" for="email">Email : </label>
            <input class="l-input" type="email" name="email" placeholder="Email" required>
            <label class="l-input" for="password">Password : </label>
            <input class="l-input" type="password" name="password" placeholder="Password" required>
            <input class="l-input" type="submit" value="login" name="login">
            <a class="l-s" href="signup.php">Dont Have Account Signup</a>
        </form>
    </section>
</body>

</html>

