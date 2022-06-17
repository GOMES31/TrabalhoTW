

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="initialpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="jquery/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div id="loader"></div>
<section>
    <nav class="navbar">
        <div class="collapse navbar-collapse container-fluid">
            <div class="nav navbar-nav navbar-left">
                <p></p>
                <a href="initialpage.php"><img src="imgs/dreamteam.png"></a>
            </div>
            <div class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <button class="dropbtn btn" data-toggle="dropdown">
                        <?php
                            session_start();
                            if (isset($_SESSION['username'])) echo $_SESSION['username'];
                            session_write_close();
                        ?>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="profilepage.php" class="dropdown-item waves-effect waves-light"><i class="fa fa-user"></i>My Profile</a></li>
                        <li><a href="index.php" class="dropdown-item waves-effect waves-light"><i class="fa fa-power-off"></i>Logout</a></li><?php session_unset();?>
                    </ul>
                </li>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="row col-12">
                    <img class="img" id="dreamteam-large" src="imgs/dreamteam_large.png">
                    <form method="post" class="navbar-form navbar-center" role="search">
                        <div class="form-group">
                            <input type="text" name="playerName" class="form-control" id="searchInput" placeholder="Search for football players...">
                            <input type="submit" value="Search" name="search" id="searchIcon" class="fa fa-search">
                        </div>
                    </form>
                </div>
                <div class="players">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="tableHeader text-center">Player Name</th>
                            <th class="tableHeader text-center">Team</th>
                            <th class="tableHeader text-center">Nationality</th>
                            <th class="tableHeader text-center">Fav</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            include "db_connect.php";
                            $pdo = openPDO('db_players');
                            $user = $_SESSION['username'];
                            if(isset($_POST['search'])) {
                                $player = $_POST['playerName'];
                                $sql = "SELECT * FROM tbl_players WHERE Nome=?";
                                $stmt = $pdo->prepare($sql);
                                $sql_execute = $stmt->execute([$player]);
                                $results = $stmt->fetchAll();
                                $num_registers = $stmt->rowCount();
                                if ($num_registers == 0) {
                                    echo '<tr class="player_tr_1">
                                        <td colspan="15"> No players found</td>
                                       </tr>';
                                } else {
                                    foreach ($results as $row) {
                                        echo "<tr><td>";
                                        echo $row['Nome'];
                                        echo '</td><td>';
                                        echo $row['Equipa'];
                                        echo '</td><td>';
                                        echo $row['Nacionalidade'];
                                        echo '</td><td><form method="post" action="addPlayer.php">
                                                <input type="hidden" name="user" value='.$user.'>
                                                <input type="hidden" name="pTeam" value='.$row['Equipa'].'>
                                                <input type="hidden" name="pName" value="'.$row['Nome'].'">
                                                <input type="hidden" name="pNationality" value='.$row['Nacionalidade'].'>
                                            <button type="submit" id="starIcon" class="fa fa-star"></button></td></tr>
                                        </form>';
                                    }
                                }
                            }
                        ?>
                        </tbody>
                    </table>
                    <div class="col-md-12"></div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="row">
                Contact us on social networks!
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"> </i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"> </i></a>
            </div>
        </div>
    </section>
    <script>
        let loader = document.getElementById("loader");
        window.addEventListener("load", function() {
            let delay = 1500;

            setTimeout(function() {
                loader.style.display = "none";
            }, delay);
        });
    </script>
</body>
</html>