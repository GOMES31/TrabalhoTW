<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="profilepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="jquery/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
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
                            if (isset($_SESSION['username'])) {
                                echo $_SESSION['username'];
                            }
                            session_unset();
                            ?></button>
                        <ul class="dropdown-menu">
                            <li><a href="profilepage.php" class="dropdown-item waves-effect waves-light"><i class="fa fa-user"></i> My Profile</a></li>
                            <li><a href="index.php" class="dropdown-item waves-effect waves-light"><i class="fa fa-power-off"></i>Logout
                                    <?php
                                    session_unset();
                                    session_destroy();
                                    ?></a>
                            </li>
                        </ul>
                    </li>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="row col-12">
                    <div class="information">
                        <div class="username-header">
                            <p class="text-left" style="color:white; margin-left:2%; font-size: 40px;">Darkgamer72</p>
                        </div>
                        <div style="width: 120px; float: left; margin-top: 2%;">
                            <div class="user-sub-header" style="color:#838995;">Join Date</div>
                            <div class="user-sub-header-content" style="color:white;">17.01.19</div>
                        </div>
                        <div style="width: 120px; float:left; margin-top: 2%;">
                            <div class="user-sub-header" style="color:#838995;">Comments</div>
                            <div class="user-sub-header-content" style="color:white;">0</div>
                        </div>
                        <div style="width: 120px; float:left; margin-top: 2%;">
                            <div class="user-sub-header" style="color:#838995;">Squads</div>
                            <div class="user-sub-header-content" style="color:white;">0</div>
                        </div>
                        <div style="width: 120px; float:left; margin-top: 2%;">
                            <div class="user-sub-header" style="color:#838995;">Votes</div>
                            <div class="user-sub-header-content" style="color:white;">0</div>
                        </div>
                    </div>
                    <div class="user-header ">
                        <div class="user-header-content">
                            <div class="container">
                                <div class="classic-tabs ">
                                    <ul class="nav" id="myClassicTab" role="tablist">
                                        <li class="nav-item" style="width: 200px; float: left;">
                                            <a class="nav-link waves-light active show waves-effect waves-light" id="activity-tab-classic" data-toggle="tab" href="#activity-classic" role="tab" aria-controls="activity-classic"><i class="fas fa-heart-rate "></i> Latest Activity</a>
                                        </li>
                                        <li class="nav-item" style="width: 200px; float: left;">
                                            <a class="nav-link waves-light waves-effect waves-light" id="comments-tab-classic" data-toggle="tab" href="#comments-classic" role="tab" aria-controls="comments-classic"><i class="fas fa-comments "></i> Comments</a>
                                        </li>
                                        <li class="nav-item" style="width: 200px; float: left;">
                                            <a class="nav-link waves-light waves-effect waves-light" id="votes-tab-classic" data-toggle="tab" href="#votes-classic" role="tab" aria-controls="votes-classic"><i class="fas fa-thumbs-up "></i> Player Votes</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container pt-5">
                            <div class="row">
                                <div class="col-md-8 p-0">
                                    <div class="tab-content m_box p-0" id="myClassicTabContent" style="overflow: hidden;">
                                        <div class="tab-pane " id="activity-classic" role="tabpanel" aria-labelledby="activity-tab-classic">
                                            <div class="timeline-main py-4">
                                                <ul class="timeline-light">
                                                    <div class="row col-12 text-center justify-content-center">
                                                        <i class="fas fa-thumbs-down mr-2 pt-1"></i> No activity was found
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="tab-pane " id="votes-classic" role="tabpanel" aria-labelledby="votes-tab-classic">
                                            <div class="row py-3">
                                                <div class="row col-12 text-center justify-content-center">
                                                    <i class="fas fa-thumbs-down mr-2 pt-1"></i> No votes were found
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane " id="comments-classic" role="tabpanel" aria-labelledby="comments-tab-classic">
                                            <div class="row py-3">
                                                <div class="row col-12 text-center justify-content-center">
                                                    <i class="fas fa-thumbs-down mr-2 pt-1"></i> No comments were found
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="m_box">
                                        <div class="border-bottom font-weight-bold w-100 pb-1">Social Media Links</div>
                                        <div class="row mt-3">
                                            <div class="col-12 pl-0">
                                                <i class="fab fa-twitter twitter-color"></i>
                                                N\A
                                            </div>
                                        </div>


                                        <div class="row mt-3">
                                            <div class="col-12 pl-0">
                                                <i class="fab fa-facebook facebook-color"></i>
                                                N\A
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12 pl-0">
                                                <i class="fab fa-youtube youtube-color"></i>
                                                N\A
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12 pl-0">
                                                <i class="fab fa-twitch twitch-color"></i>
                                                N\A
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
</body>

</html>