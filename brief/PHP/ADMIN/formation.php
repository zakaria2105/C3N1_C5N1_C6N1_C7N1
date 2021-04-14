<?php
session_start();
if (isset($_SESSION['email'])) {
    include "../INCLUDE/Connect.php";
    include "../INCLUDE/dheader.php";
    // Add Formation
    if (isset($_POST['submit'])) {
        $dev = $_POST['developpeurs'];
        $techno = $_POST['techno'];
        $sdate = $_POST['date'];

        $sql = "INSERT INTO `formation` (`developpeur_id`, `techno`, `DATE`) VALUES (?, ?, ?);";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $dev,
            $techno,
            $sdate,
        ]);
    }
    // Chek if Their is a formation
    $sql = "SELECT * FROM formation";
    $stmt = $pdo->query($sql);
    $count = $stmt->rowCount();
    if ($count == 0) { ?>
        <h1>NO Formations Yet</h1>
        <button class='add' id='open'>Add Formation</button>
        <section class="modal-container" id="modal">
            <div class="modal">
                <h3 class="m-title">Add Formation</h3>
                <hr>
                <form action="" method="POST">
                    <label for="techno">Select The Developpeur :</label><br>
                    <select name="developpeurs" class="m-select">
                        <?php
                        $sql = "SELECT * FROM developpeurs";
                        $stmt = $pdo->query($sql);
                        $result = $stmt->fetchAll(2);
                        foreach ($result as $row) {
                            echo "<option value='$row[id]'>$row[FirstName] $row[LastName]</option>";
                        }
                        ?>
                    </select><br>
                    <label for="techno">Select The Techno :</label><br>
                    <select name="techno" id="techno" class="m-select">
                        <option value="HTML">HTML</option>
                        <option value="JS">JS</option>
                        <option value="AJAX">AJAX</option>
                        <option value="PHP">PHP</option>
                        <option value="CGI">CGI</option>
                    </select><br>
                    <label for="techno">Select The Date :</label><br>
                    <input type="date" name="date" class="m-select"><br>
                    <input type="submit" name="submit" value="Add" class="add"></input>
                    <button id="close" class="button">Cancel</button>
                </form>
                </form>
            </div>
        </section>
    <?php } else { ?>
        <h1>Liste of developers with formation</h1>
        <button class='add' id='open'>Add Formation</button>
        <table class="f-table">
            <thead>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Techno</th>
                <th>Date</th>
                <th>Delete</th>
            </thead>
            <?php
            $i = 1;
            $sql = "SELECT * FROM developpeurs INNER JOIN Formation ON developpeurs.id = formation.developpeur_id ORDER BY date";
            foreach ($pdo->query($sql) as $row) : ?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $row['FirstName'] ?></td>
                    <td><?php echo $row['LastName'] ?></td>
                    <td><?php echo $row['techno'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td>
                        <a href="deletef.php?id=<?php echo  $row['id'] ?>" class="delete">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <section class="modal-container" id="modal">
            <div class="modal">
                <h3 class="m-title">Add Formation</h3>
                <hr>
                <form action="" method="POST">
                    <label for="techno">Select The Developpeur :</label><br>
                    <select name="developpeurs" class="m-select">
                        <?php
                        $sql = "SELECT * FROM developpeurs";
                        $stmt = $pdo->query($sql);
                        $result = $stmt->fetchAll(2);
                        foreach ($result as $row) {
                            echo "<option value='$row[id]'>$row[FirstName] $row[LastName]</option>";
                        }
                        ?>
                    </select><br>
                    <label for="techno">Select The Techno :</label><br>
                    <select name="techno" id="techno" class="m-select">
                        <option value="HTML">HTML</option>
                        <option value="JS">JS</option>
                        <option value="AJAX">AJAX</option>
                        <option value="PHP">PHP</option>
                        <option value="CGI">CGI</option>
                    </select><br>
                    <label for="techno">Select The Date :</label><br>
                    <input type="date" name="date" class="m-select"><br>
                    <input type="submit" name="submit" value="Add" class="add"></input>
                    <button id="close" class="button">Cancel</button>
                </form>
                </form>
            </div>
        </section>
<?php }
    include_once "../INCLUDE/footer.php";
} else {
    header('location: login.php');
}
?>