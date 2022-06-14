<?php

function openPDO()
{
    $host = 'localhost';
    $database = 'db_users';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';


    $dsn = "mysql:host=$host;dbname=$database;charset=$charset";

    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    //$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Connect failed: %s\n". $conn -> error);
    //mysqli_select_db($conn,$db);

   return new PDO($dsn,$user,$pass,$opt);
}

function closePDO($pdo){
    {
        $pdo -> close();
    }
}

?>
