<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Favourite Players</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="favouriteplayers.css">
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
                            if (isset($_SESSION['username'])) echo $_SESSION['username'];
                            ?></button>
                        <ul class="dropdown-menu">
                            <li><a href="profilepage.php" class="dropdown-item waves-effect waves-light"><i class="fa fa-user"></i> My Profile</a></li>
                            <li><a href="index.php" class="dropdown-item waves-effect waves-light"><i class="fa fa-power-off"></i>Logout</a></li><?php session_destroy();?>
                        </ul>
                    </li>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="row col-12">
                    <div class="information">
                        <br>
                        <p class="header_mid">My Favourite Players</p>
                        <div class="favplayers">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="tableHeader">Player Name</th>
                                        <th class="tableHeader">Team</th>
                                        <th class="tableHeader">Nationality</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="player_tr_1">
                                        <td>No player found</td>
                                        <td>No team found</td>
                                        <td>No nationality found</td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="btn"><a href="initialpage.php">Add Players</a></td>
                                        <td class="btn"><i class="fa fa-arrow-circle-left"></i></td>
                                        <td class="btn"><i class="fa fa-arrow-circle-right"></i></td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="col-md-12"></div>
                        </div>
                    </div>
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
    window.addEventListener("load", function () {
        let delay = 1500;

        setTimeout(function () {
            loader.style.display = "none";
        }, delay);
    });
</script>
</body>

</html>