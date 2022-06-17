<?php


include "db_connect.php";

$pdo = openPDO('db_users');


$playerId= $_POST['id'];

$sql = "DELETE FROM tbl_favplayers WHERE id=?";
$stmt = $pdo->prepare($sql);
$sql_execute = $stmt->execute([$playerId]);

if ($sql_execute) {
    header('Location: favouriteplayers.php');
    closePDO($pdo);
    exit;
}
