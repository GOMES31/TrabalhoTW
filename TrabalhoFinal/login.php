<html>
<body style="background: url('imgs/estadio.jpg') no-repeat center center fixed; background-size: cover;">
<?php
header("content-Type:text/html; charset=ISO-8859-11", true);
include "db_connect.php";

session_start();

$pdo = openPDO();

$username = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
if (empty($username) || empty($password) || empty($confirmPassword)) {
    $_SESSION['errors'] = '*Preencha todos os campos!';
    header('Location: loginpage.php');
    closePDO($pdo);
    exit;
}

$sql = "SELECT * FROM tbl_cliente WHERE Password= ? AND Username= ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$username,$password]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Verifica se ha utilizadores
if ($stmt->rowCount() == 0) {
    $_SESSION['errors'] = '*Não há utilizadores com esse nome!';
    header('Location: loginpage.php');
    closePDO($pdo);
    exit;
}

// Verifica se o utilizador está ativo caso exista
else if($stmt->fetchColumn(5) == 1){
    $_SESSION['errors'] = '*Esse utilizador já esta logado no site!';
    header('Location: loginpage.php');
    closePDO($pdo);
    exit;
}
else{
    $validPassword = password_verify($password, $user['password']);
    if($validPassword){
        session_start();
        // Se as condições se verificarem todas até cá
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['StatusPresença'] = 1;
        //Redirecionar para a página desejada
        header("Location: initialpage.php");
        print "<script>alert('Logado com sucesso!');</script>";
        closePDO($pdo);
        exit;
    }
    else{
        $_SESSION['errors'] = '*Palavra-passe incorreta!';
        header('Location: loginpage.php');
        closePDO($pdo);
        exit;
    }
}


?>
</body>
</html>
