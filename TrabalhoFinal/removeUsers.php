<?php

include "db_connect.php";

$pdo = openPDO('db_users');

if(isset($_POST['removeUser'])){
    $username = $_POST['removeUser'];

    $sql = "DELETE FROM tbl_cliente WHERE Username=?";
    $stmt = $pdo->prepare($sql);
    $sql_execute = $stmt->execute([$username]);
    if($sql_execute) {
        $_SESSION['message'] = "Utilizador apagado com sucesso!";
        header('Location: adminpage.php');
        exit;
    }
}