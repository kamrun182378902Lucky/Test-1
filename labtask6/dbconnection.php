<?php 
function db_conn()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "E learning Management system";
$conn=new mysqli($servername,$username,$password,$dbname) or die("connect fail:%s\n".$conn->error);
   return $conn;
}
?>