<?php

function OpenCon()
{
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'users';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Connect failed: %s\n". $conn -> error);
    mysqli_select_db($conn,$db);

    return $conn;
}

function CloseCon($conn){
    {
        $conn -> close();
    }
}

?>
