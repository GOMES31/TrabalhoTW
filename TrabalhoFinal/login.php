<html>
<body style="background: url('imgs/estadio.jpg') no-repeat center center fixed; background-size: cover;">
<?php
header("content-Type:text/html; charset=ISO-8859-11", true);
include "db_connect.php";


$pdo = openPDO('db_users');

$username = $_POST['username'];
$password = $_POST['password'];


if (empty($username) || empty($password)) {
    $_SESSION['errors'] = '*Preencha todos os campos!';
    header('Location: loginpage.php');
    closePDO($pdo);
    exit;
}


$sql = "SELECT * FROM tbl_cliente WHERE Username=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$username]);
$user = $stmt->fetch();
$num_registers = $stmt->rowCount();


//Verifica se há algum utilizador com aquele username
if ($num_registers==0) {
    $_SESSION['errors'] = '*Username não existe!';
    header('Location: loginpage.php');
    closePDO($pdo);
    exit;
}
else{
    $username1 = $user['Username'];
    $password1 = $user['Password'];
    $statusAdmin = $user['StatusAdmin'];

    if((strcmp($password1, $password)!== 0)){
        $_SESSION['errors'] = '*Palavra-passe incorreta!';
        header('Location: loginpage.php');
        closePDO($pdo);
        exit;
    }
    else{
        session_start();
        if($statusAdmin==1){
            $_SESSION['username'] = $username1;
            $_SESSION['password'] = $password1;
            header("Location: admin_initialpage.php");
            print "<script>alert('Logado com sucesso!');</script>";
            closePDO($pdo);
            exit;
        }
        else{
        $_SESSION['username'] = $username1;
        $_SESSION['password'] = $password1;
        header("Location:initialpage.php");
        print "<script>alert('Logado com sucesso!');</script>";
        closePDO($pdo);
        exit;
        }
    }
}

?>
</body>
</html>
