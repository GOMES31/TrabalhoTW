<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="jquery/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>
<div id="preloader"></div>
<section>
    <nav class="navbar">
        <div class="collapse navbar-collapse container-fluid">
            <div class="nav navbar-nav navbar-left">
                <p></p>
                <a href="index.php"><img src="imgs/dreamteam.png"></a>
            </div>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" id="searchInput" class="form-control" placeholder="Search...">
                     <button type="submit" id="searchIcon" class="fa fa-search"></button>
                </div>
            </form>
            <div class="nav navbar-nav navbar-right">
                <a href="loginpage.php"><button class="btn">Login</button></a>
                <a href="registerpage.php"><button class="btn">Register</button></a>
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
        <div class="row" id="footer">
            Contact us on social networks!
            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"> </i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"> </i></a>
        </div>
    </div>
</section>
<!--<script src="script.js">loadingPage()</script>-->
<script>
    let loader = document.getElementById("preloader");

window.addEventListener("load",function (){
    var delay = 1700;

    setTimeout(function(){
        loader.style.display = "none";
    },delay);
});
</script>
</body>
</html>