<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "web_noithat";

$conn = new mysqli($host, $user, $pass, $dbname);
//check kết nối
if ($conn->connect_errno){
    die("Kết nối không thành công".$conn->connect_errno);
}
?>