<html>
<body style="background: url('./imgs/estadio.jpg') no-repeat center center fixed; background-size: cover;">
<?php

session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if(empty($username) || empty($password) || empty($confirmPassword)){
        $_SESSION['errors'] = 'Preencha os campos obrigatórios!';
        header('Location: registerpage.php');
    }
    else if ($password !== $confirmPassword) {
        $_SESSION['errors'] = 'As passwords não coincidem!';
        header('Location: registerpage.php');
    }
    else{
        header("Location: initialpage.html");
        print "<script>alert('Logado com sucesso!');</script>";
        exit;
    }
 ?>
</body>
</html>
