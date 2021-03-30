
<?php

include "../INCLUDE/Connect.php";
session_start();
$nom = '';
$prenom = '';
$email = '';
if(isset($_POST['registre'])){
    $nom =  $_POST['nom'];
    $prenom =  $_POST['prenom'];
    $email =  $_POST['email'];
    $password =  $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    if(empty($nom)){
        echo "<script> alert ('First Name Empty'); </script>";
    }else{
        if(!preg_match("/^[a-zA-Z]*$/",$nom)){
            echo "<script> alert ('First Name Not Valid'); </script>";
        }else{
            if(empty($prenom)){
                echo "<script> alert ('Last Name Empty'); </script>";
            }else{
                if(!preg_match("/^[a-zA-Z]*$/",$prenom)){
                    echo "<script> alert ('Last Name Not Valid'); </script>";
                }else{
                    if(empty($email)){
                        echo "<script> alert ('Email Empty'); </script>";
                    }else{
                        if(empty($password)){
                            echo "<script> alert ('Password Empty'); </script>";
                        }else{
                            $emailchek = "SELECT * FROM developpeurs WHERE email = ?";
                            $stmt = $pdo->prepare($emailchek);
                            $stmt->execute(array(
                                $email,
                                ));
                            if($stmt->rowCount()){
                                echo "<script> alert ('Email Already Exist'); </script>";
                                die;
                            }else{
                            $sql = "INSERT INTO developpeurs (nom, prenom, email, password) VALUES (?, ?, ?, ?)";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute(array(
                                $nom,
                                $prenom,
                                $email,
                                $hash,
                                    ));
                                if($stmt->rowCount()){
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/signup.css">
    <title>signup</title>
</head>

<body>
    <section class="signup">
        <form class="s-form" action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
            <label class="s-input" for="name">Nom : </label>
            <br>
            <input class="s-input" type="text" name="nom" placeholder="Nom" value="<?php echo $nom ?>">
            <br>
            <label class="s-input" for="Prenom">Prénom : </label>
            <br>
            <input class="s-input" type="text" name="prenom" placeholder="Prénom" value="<?php echo $prenom ?>">
            <br>
            <label class="s-input" for="email">Email : </label>
            <br>
            <input class="s-input" type="email" name="email" placeholder="Email" value="<?php echo $email ?>">
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
