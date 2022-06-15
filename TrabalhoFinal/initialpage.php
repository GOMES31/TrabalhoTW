<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="initialpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="jquery/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<section>
    <nav class="navbar">
        <div class="collapse navbar-collapse container-fluid">
            <div class="nav navbar-nav navbar-left">
                <p></p>
                <a href="initialpage.php"><img src="imgs/dreamteam.png"></a>
            </div>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input id="searchInput" type="text" class="form-control" placeholder="Search...">
                    <button type="submit" id="searchIcon" class="fa fa-search"></button>
                </div>
            </form>
            <div class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <button class="dropbtn btn" data-toggle="dropdown">
                        <?php
                        session_start();
                        if (isset($_SESSION['username'])) {
                            echo $_SESSION['username'];
                        }
                        session_unset();
                        ?></button>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item waves-effect waves-light"><i class="fa fa-toolbox"></i>Account settings</a></li>
                        <li><a href="#" class="dropdown-item waves-effect waves-light"><i class="fa fa-user"></i> My Profile</a></li>
                        <li><a href="index.php" class="dropdown-item waves-effect waves-light"><i class="fa fa-power-off"></i>
                                <?php
                                    session_unset();
                                    session_destroy();
                                ?>Logout</a>
                            </li>
                    </ul>
                </li>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="row col-12">
                <img class="img" id="dreamteam-large" src="imgs/dreamteam_large.png">
                <div class="information">
                    <h3>Dream Team</h3>
                    <p>Bem vindos ao nosso website, aqui pode saber todos os dados dos seus jogadores de futebol
                        favoritos! E para animar a sua estadia no nosso website desenvolvemos uma ferramenta do tipo
                        "squad builder" em que pode juntar os seus jogadores favoritos para criar e guardar as suas
                        "Dream Team's".</p>
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
<!--
<?php

session_start();
echo $_SESSION['username'];


?>-->

</body>
</html>