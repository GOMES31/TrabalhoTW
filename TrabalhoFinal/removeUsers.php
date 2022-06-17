<?php

include "db_connect.php";

$pdo = openPDO('db_users');


    $userId = $_POST['id'];

    $sql = "DELETE FROM tbl_cliente WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $sql_execute = $stmt->execute([$userId]);

    if($sql_execute){
        echo 'Utilizador removido com sucesso!';
        header('Location: adminpage.php');
        closePDO($pdo);
        exit;
    }
