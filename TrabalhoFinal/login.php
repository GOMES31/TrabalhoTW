<html>
<body style="background: url('imgs/estadio.jpg') no-repeat center center fixed; background-size: cover;">
<?php
header("content-Type:text/html; charset=ISO-8859-11", true);
include "db_connect.php";

session_start();

$pdo = openPDO();

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

    if((strcmp($password1, $password)!== 0)){
        $_SESSION['errors'] = '*Palavra-passe incorreta!';
        header('Location: loginpage.php');
        closePDO($pdo);
        exit;
    }
    else{

        //teste unitários:
         /*echo "Dados validados<br>";
         echo "User inserido:$username";
         echo "<br>";
         echo "Pass inserida:$password";
         echo "<br>";
         echo "Username1:$username1";
         echo "<br>";
         echo "Password1: $password1";
         echo "<br>";*/


        session_start();
        // Se as condições se verificarem todas até cá
        $_SESSION['username'] = $username1;
        $_SESSION['password'] = $password1;
        echo "Sessão iniciada";
        //Redirecionar para a página desejada
        header("Location: initialpage.php");
        print "<script>alert('Logado com sucesso!');</script>";
        closePDO($pdo);
        exit;


    }
}

?>
</body>
</html>
