<?php
include('db.php');
session_start();
$user_check=$_SESSION['username'];
// print($_SESSION['username']);
 
// $sql = mysqli_query($db_connect,"SELECT username FROM users_login WHERE username='$user_check' ");
// print_r($sql);
 
// $row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 
// $username=$row['username'];
 
if(!isset($user_check))
{
header("Location: backend_login.php");
}


?>