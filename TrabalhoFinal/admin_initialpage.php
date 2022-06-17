<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
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
<body>
<div id="loader"></div>
<section>
    <nav class="navbar">
        <div class="collapse navbar-collapse container-fluid">
            <div class="nav navbar-nav navbar-left">
                <p></p>
                <a href="admin_initialpage.php"><img src="imgs/dreamteam.png"></a>
            </div>
            <div class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <button class="dropbtn btn" data-toggle="dropdown">
                        <?php
                        session_start();
                        if (isset($_SESSION['username'])) echo $_SESSION['username'];
                        ?></button>
                    <ul class="dropdown-menu">
                        <li><a href="admin_profilepage.php" class="dropdown-item waves-effect waves-light"><i class="fa fa-user"></i>My Profile</a></li>
                        <li><a href="adminpage.php" class="dropdown-item waves-effect waves-light"><i class="fa fa-hammer"></i>Admin Panel</a></li>
                        <li><a href="index.php" class="dropdown-item waves-effect waves-light"><i class="fa fa-power-off"></i>Logout</a></li><?php session_destroy();?>
                    </ul>
                </li>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="row col-12">
                <img class="img" id="dreamteam-large" src="imgs/dreamteam_large.png">
            <form class="navbar-form navbar-center" role="search">
                <div class="form-group">
                    <input id="searchInput" type="text" class="form-control" placeholder="Search for football players...">
                    <button type="submit" id="searchIcon" class="fa fa-search"></button>
                </div>
            </form>
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
    window.addEventListener("load",function (){
        let delay = 1500;

        setTimeout(function(){
            loader.style.display = "none";
        },delay);
    });
</script>
</body>
</html>