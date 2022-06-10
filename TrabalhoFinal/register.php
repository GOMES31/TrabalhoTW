<html>
<body style="background: url('imgs/estadio.jpg') no-repeat center center fixed; background-size: cover;">
<?php
header("content-Type:text/html; charset=ISO-8859-11", true);
include "db_connection.php";

session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    if(empty($username) || empty($password) || empty($confirmPassword)){
        $_SESSION['errors'] = 'Preencha todos os campos!';
        header('Location: registerpage.php');
        closeCon();
    }
    else if($password !== $confirmPassword) {
        $_SESSION['errors'] = 'As passwords não coincidem!';
        header('Location: registerpage.php');
        closeCon();
        exit;
    }

    $conn = OpenCon();
    $query = "SELECT * from tbl_cliente WHERE username=$username";
    $checkDB= mysqli_query($conn,$query);
    $results=mysqli_num_rows($checkDB);

    if($results==0 || $results==null){
        //Se não existir utilizador, cria conta e inicia sessão automaticamente e adiciona os dados à base de dados
        $row=$checkDB->fetch_assoc();
        $row['username'] = $_SESSION['username'];
        $row['password'] = $_SESSION['password'];
        header("Location: initialpage.php");
        print "<script>alert('Registado com sucesso!');</script>";
        closeCon();
        exit;
    }
    else {
        while ($row = $checkDB->fetch_assoc()) {
            $user = $row['username'];
            /*$login = $row['login'];
            $pass = $row['pass'];
            $status = $row['status'];*/

            if ($user == $username) {
                $_SESSION['errors'] = 'Já existe um utilizador com esse nome!';
                header('Location: registerpage.php');
                closeCon();
                exit;
            }
        }
    }
 ?>
</body>
</html>
