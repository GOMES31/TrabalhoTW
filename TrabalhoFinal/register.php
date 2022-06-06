<html>
<body style="background-image: url('/imgs/estadio.jpg')">
<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if(empty($username) || empty($password) || empty($confirmPassword)){
        print "<script>alert('Preencha os campos obrigatórios!');
        location.href='register.html'; </script>";
    }
    else if ($password !== $confirmPassword) {
        print "<script>alert('As passwords não coincidem!');
        location.href='register.html'; </script>";
    }
    else{
        header("Location: initialpage.html");
        print "<script>alert('Logado com sucesso!');</script>";
        exit;
    }
 ?>
</body>
</html>
