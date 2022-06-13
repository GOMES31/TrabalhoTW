<html>
<body style="background: url('imgs/estadio.jpg') no-repeat center center fixed; background-size: cover;">
<?php
header("content-Type:text/html; charset=ISO-8859-11", true);
include "db_connection.php";

session_start();
    $conn = OpenCon();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
        if(empty($username) || empty($password) || empty($confirmPassword)){
            $_SESSION['errors'] = '*Preencha todos os campos!';
            header('Location: registerpage.php');
            closeCon($conn);
        }
        else if($password !== $confirmPassword) {
            $_SESSION['errors'] = '*As passwords não coincidem!';
            header('Location: registerpage.php');
            closeCon($conn);
            exit;
        }

    $query = "SELECT * from tbl_cliente WHERE Username=$username";
    $results= mysqli_query($conn,$query);

    if($results==false){
        //Se não existir utilizador, cria conta e inicia sessão automaticamente e adiciona os dados à base de dados
        $newUser = $_POST['username'];
        $newUserPass = $_POST['password'];

        // Criar utilizador na base de dados(insert)
        $stmt = $conn->prepare(
             "INSERT INTO tbl_cliente (Username, Password) VALUES (?, ?)"
        );
         $stmt->bind_param('ss',$newUser,$newUserPass);
         $stmt->execute();

        // Iniciar sessão e setar o que é preicso para logar
        $_SESSION['id']= $stmt->insert_id;
        $_SESSION['username']= $newUser;
        $_SESSION['password']= $newUserPass;

        header("Location: initialpage.php");
        print "<script>alert('Registado com sucesso!');</script>";
        closeCon($conn);
        exit;
    }
    else {
          closeCon($conn);
          $_SESSION['errors'] = '*Já existe um utilizador com esse nome!';
          header('Location: registerpage.php');
          exit;
       }
 ?>
</body>
</html>
