<?php include "../INCLUDE/Connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/heeader.css">
    <link rel="stylesheet" href="../../CSS/dash.css">
    <title>techno</title>
</head>
<body>
<?php include_once "../INCLUDE/Dheader.php"; ?>

    <h1 class="titre">List of Developers With Their Level</h1>
    <table border="" style="border-collapse: collapse;">
        <thead>
            <th>#</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>HTML</th>
            <th>JS</th>
            <th>AJAX</th>
            <th>PHP</th>
            <th>CGI</th>
            <th>Delete</th>
        </thead>

        <?php 
            $i = 1;
            $sql="SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id";
            foreach ($pdo->query($sql) as $row) : ?>

        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $row['nom'] ?></td>
            <td><?php echo $row['prenom'] ?></td>
            <td><?php echo $row['HTML'] ?></td>
            <td><?php echo $row['JS'] ?></td>
            <td><?php echo $row['AJAX'] ?></td>
            <td><?php echo $row['PHP'] ?></td>
            <td><?php echo $row['CGI'] ?></td>
            <td>
            <a href="editt.php?id=<?php echo  $row['id']?>">Edit</a>
            </td>
        </tr>
            <?php endforeach; ?>
    </table>
<?php
    $i = 1;
    if(isset($_POST['searche'])){
                if(isset($_POST['HTML'])){
                $sql ="SELECT nom, prenom FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE HTML = 5 OR JS = 5 OR AJAX = 5 OR PHP = 5 OR CGI = 5";
                $stmt = $pdo->query($sql);
                $numex = $stmt->rowCount();
                var_dump($numex)    
                    ?>
                    <h1>List Of Expert Developers in HTML</h1>

                    <table border="" style="border-collapse: collapse;">
                        <thead>
                                        <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                        </thead>
                    <?php
                    $sql="SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE HTML = 5";
                    $result = $pdo->query($sql);
                    foreach ($result as $key => $row) :?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['nom'] ?></td>
                            <td><?php echo $row['prenom'] ?></td>
                        </tr>
                <?php endforeach; 
            
                }elseif(isset($_POST['JS'])){?>
                    <h1>List Of Expert Developers in JS</h1>
                    <table border="" style="border-collapse: collapse;">
                        <thead>
                                        <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                        </thead>
                    <?php
                    $sql="SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE JS = 5";
                    $result = $pdo->query($sql);
                    foreach ($result as $key => $row) :?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['nom'] ?></td>
                            <td><?php echo $row['prenom'] ?></td>
                        </tr>
                <?php endforeach; 

                }elseif(isset($_POST['AJAX'])){?>
                    <h1>Liste Dexperte On AJAX</h1>
                    <table border="" style="border-collapse: collapse;">
                        <thead>
                                        <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                        </thead>
                    <?php
                    $sql="SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE AJAX = 5";
                    $result = $pdo->query($sql);
                    foreach ($result as $key => $row) :?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['nom'] ?></td>
                            <td><?php echo $row['prenom'] ?></td>
                            
                        </tr>
                <?php endforeach; 

                }elseif(isset($_POST['CGI'])){?>
                    <h1>List Of Expert Developers in  PHP</h1>
                    <table border="" style="border-collapse: collapse;">
                        <thead>
                                        <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                        </thead>
                    <?php
                    $sql="SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE PHP = 5";
                    $result = $pdo->query($sql);
                    foreach ($result as $key => $row) :?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['nom'] ?></td>
                            <td><?php echo $row['prenom'] ?></td>
                            
                        </tr>
                <?php endforeach; 

                }elseif(isset($_POST['PHP'])){?>
                    <h1>List Of Expert Developers in CGI</h1>
                    <table border="" style="border-collapse: collapse;">
                        <thead>
                                        <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                        </thead>
                    <?php
                    $sql="SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE PHP = 5";
                    $result = $pdo->query($sql);
                    foreach ($result as $key => $row) :?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['nom'] ?></td>
                            <td><?php echo $row['prenom'] ?></td>
                            
                        </tr>
                <?php endforeach; 

                }
            }else{ ?>
                <h1>List Of Expert Developers in HTML</h1>
                <table border="" style="border-collapse: collapse;">
                <thead>
                                <th>#</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                </thead>
            <?php
            $sql="SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE HTML = 5";
            $result = $pdo->query($sql);
            foreach ($result as $key => $row) :?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $row['nom'] ?></td>
                    <td><?php echo $row['prenom'] ?></td>
                </tr>
        <?php endforeach; 

            }
        ?>
        </table>
        <form action="" method="POST">
                <label for="HTML">HTML :</label>
                <input class="f-input" type="radio" name="HTML" value="HTML">
                <label for="JS">JS :</label>
                <input class="f-input" type="radio" name="JS" value="JS">
                <label for="AJAX">AJAX :</label>
                <input class="f-input" type="radio" name="AJAX" value="AJAX">
                <label for="PHP">PHP :</label>
                <input class="f-input" type="radio" name="PHP" value="PHP">
                <label for="CGI">CGI :</label>
                <input class="f-input" type="radio" name="CGI " value="CGI"><br>
                <input type="submit" name="searche" value="search">
    </form>
<?php
    $i = 1;
    if(isset($_POST['search'])){
                if(isset($_POST['HTML'])){?>
                    <h1>list of developers with an unknown level In HTML</h1>
                    <table border="" style="border-collapse: collapse;">
                        <thead>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                        </thead>
                    <?php
                    $sql="SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE HTML = -1";
                    $result = $pdo->query($sql);
                    foreach ($result as $key => $row) :?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['nom'] ?></td>
                            <td><?php echo $row['prenom'] ?></td>
                        </tr>
                <?php endforeach; 
            
                }elseif(isset($_POST['JS'])){?>
                    <h1>list of developers with an unknown level In JS</h1>
                    <table border="" style="border-collapse: collapse;">
                        <thead>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                        </thead>
                    <?php
                    $sql="SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE JS = -1";
                    $result = $pdo->query($sql);
                    foreach ($result as $key => $row) :?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['nom'] ?></td>
                            <td><?php echo $row['prenom'] ?></td>
                        </tr>
                <?php endforeach; 

                }elseif(isset($_POST['AJAX'])){?>
                    <h1>list of developers with an unknown level In AJAX</h1>
                    <table border="" style="border-collapse: collapse;">
                        <thead>
                                        <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                        </thead>
                    <?php
                    $sql="SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE AJAX = -1";
                    $result = $pdo->query($sql);
                    foreach ($result as $key => $row) :?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['nom'] ?></td>
                            <td><?php echo $row['prenom'] ?></td>
                            
                        </tr>
                <?php endforeach; 

                }elseif(isset($_POST['CGI'])){?>
                    <h1>list of developers with an unknown level In PHP</h1>
                    <table border="" style="border-collapse: collapse;">
                        <thead>
                                        <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                        </thead>
                    <?php
                    $sql="SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE PHP = -1";
                    $result = $pdo->query($sql);
                    foreach ($result as $key => $row) :?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['nom'] ?></td>
                            <td><?php echo $row['prenom'] ?></td>
                            
                        </tr>
                <?php endforeach; 

                }elseif(isset($_POST['PHP'])){?>
                    <h1>list of developers with an unknown level In CGI</h1>
                    <table border="" style="border-collapse: collapse;">
                        <thead>
                                        <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                        </thead>
                    <?php
                    $sql="SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE PHP = -1";
                    $result = $pdo->query($sql);
                    foreach ($result as $key => $row) :?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['nom'] ?></td>
                            <td><?php echo $row['prenom'] ?></td>
                            
                        </tr>
                <?php endforeach; 

                }
            }else{ ?>
                <h1>list of developers with an unknown level In HTML</h1>
                <table border="" style="border-collapse: collapse;">
                <thead>
                                <th>#</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                </thead>
            <?php
            $sql="SELECT * FROM developpeurs INNER JOIN techno ON developpeurs.id = techno.developpeur_id WHERE HTML = -1";
            $result = $pdo->query($sql);
            foreach ($result as $key => $row) :?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $row['nom'] ?></td>
                    <td><?php echo $row['prenom'] ?></td>
                </tr>
        <?php endforeach; 

            }
        ?>
        </table>
        <form action="" method="POST">
                <label for="HTML">HTML :</label>
                <input class="f-input" type="radio" name="HTML" value="HTML">
                <label for="JS">JS :</label>
                <input class="f-input" type="radio" name="JS" value="JS">
                <label for="AJAX">AJAX :</label>
                <input class="f-input" type="radio" name="AJAX" value="AJAX">
                <label for="PHP">PHP :</label>
                <input class="f-input" type="radio" name="PHP" value="PHP">
                <label for="CGI">CGI :</label>
                <input class="f-input" type="radio" name="CGI " value="CGI"><br>
                <input type="submit" name="search" value="search">
    </form>


</body>
</html>