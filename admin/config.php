<?php
ob_start();
session_start();
define('SERVERNAME', 'localhost:8889');
define('USERNAME', 'root');
define('PASSWORD', 'root');
define('DBNAME', 'myhospital');


$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
if(!$conn) 
{
    echo "DB login error";
    exit();
}
?>