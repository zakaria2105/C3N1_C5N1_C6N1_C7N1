<?php
session_start();
$FirstName = '';
$LastName = '';
$email = '';
if (isset($_POST['registre'])) {
    include "../INCLUDE/Connect.php";
    $FirstName =  $_POST['FirstName'];
    $LastName =  $_POST['LastName'];
    $email =  $_POST['email'];
    $password =  $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    if (empty($FirstName)) {
        echo "<script> alert ('First Name Empty'); </script>";
    } else {
        if (!preg_match("/^[a-zA-Z]{3,16}$/", $FirstName)) {
            echo "<script> alert ('First Name Not Valid'); </script>";
        } else {
            if (empty($LastName)) {
                echo "<script> alert ('Last Name Empty'); </script>";
            } else {
                if (!preg_match("/^[a-zA-Z]*$/", $LastName)) {
                    echo "<script> alert ('Last Name Not Valid'); </script>";
                } else {
                    if (empty($email)) {
                        echo "<script> alert ('Email Empty'); </script>";
                    } else {
                        if (empty($password)) {
                            echo "<script> alert ('Password Empty'); </script>";
                        } else {
                            $emailchek = "SELECT * FROM developpeurs WHERE email = ?";
                            $stmt = $pdo->prepare($emailchek);
                            $stmt->execute(array(
                                $email,
                            ));
                            if ($stmt->rowCount()) {
                                echo "<script> alert ('Email Already Exist'); </script>";
                                die;
                            } else {
                                $sql = "INSERT INTO developpeurs (FirstName, LastName, email, password) VALUES (?, ?, ?, ?)";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute([
                                    $FirstName,
                                    $LastName,
                                    $email,
                                    $hash,
                                ]);
                                if ($stmt->rowCount()) {
                                    header('location: techno.php');
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
$FirstName = '';
$LastName = '';
$email = '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/main.css">
    <link rel="stylesheet" href="../../CSS/normalize.css">
    <title>signup</title>
</head>

<body>
    <section class="signup">
        <form class="s-form" action="" method="POST">
            <label class="s-input" for="name">First Name : </label>
            <br>
            <input class="s-input" type="text" name="FirstName" placeholder="First Name" value="<?php echo $FirstName ?>" autofocus>
            <br>
            <label class="s-input" for="LastName">Last Name : </label>
            <br>
            <input class="s-input" type="text" name="LastName" placeholder="Last Name" value="<?php echo $LastName ?>">
            <br>
            <label class="s-input" for="email">Email : </label>
            <br>
            <input class="s-input" type="email" name="email" value="@gmail.com" placeholder="Email" value="<?php echo $email ?>">
            <br>
            <label class="s-input" for="password">Password : </label>
            <br>
            <input class="s-input" type="password" name="password" placeholder="Password" minlength="8" maxlength="32">
            <br>
            <input class="s-input" type="submit" name="registre" value="Registre" id="SignUp">
            <a class="l-s" href="index.php">Already Have Account Login</a>
        </form>
    </section>
</body>

</html>