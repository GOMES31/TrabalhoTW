<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="register&login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="jquery/jquery-3.6.0.min.js"></script>
    <script src="verifyPassword.js"></script>
</head>
<body>
<div class="header">
    <div class="topleft">
        <a href="index.php"><img src="imgs/dreamteam.png"></a>
    </div>
</div>
<section>
    <div class="menu">
        <h2>Login</h2>
        <form method="POST" action="login.php">
            <!--Username input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="username">Username:</label>
                <br>
                <input type="text" id="username" name="username" class="form-control login-inputs" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="password">Password:</label>
                <br>
                <input type="password" id="password" name="password" class="form-control login-inputs"/>
            </div>
            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <br>
                        <br>
                        <br>
                        <!-- Submit button -->
                        <button type="submit" class="menuButton">Login</button>
                    </div>
                </div>
            </div>

            <div class="text-center" id="criarconta">
                <p>Ainda não tem conta?<a href="registerpage.php">Criar conta</a></p>
            </div>
            <?php
            if(isset($_SESSION['errors'])) {
                echo $_SESSION['errors'];
            }
            ?>
        </form>
    </div>
</section>

</body>
</html>