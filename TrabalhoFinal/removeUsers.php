<?php

include "db_connect.php";

$pdo = openPDO('db_users');


    $username = $_REQUEST['user'];

    $sql = "DELETE FROM tbl_cliente WHERE Username=?";
    $stmt = $pdo->prepare($sql);
    $sql_execute = $stmt->execute([$username]);

    var_dump($username);
