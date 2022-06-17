<?php

include "db_connect.php";

$pdo = openPDO('db_users');


$user = $_POST['user'];
$playerTeam = $_POST['pTeam'];
$playerName = $_POST['pName'];
$playerNationality = $_POST['pNationality'];

$sql = "INSERT INTO tbl_favplayers (Username,Equipa,Nome,Nacionalidade)VALUES (?,?,?,?)";
// Criar utilizador na base de dados(insert)
$stmt = $pdo->prepare($sql);
$sql_execute = $stmt->execute([$user,$playerTeam, $playerName, $playerNationality,
]);

if($sql_execute){
    header('Location: favouriteplayers.php');
    closePDO($pdo);
    exit;
}


