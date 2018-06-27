<?php
session_start();
include("db.php"); //Establishing connection with our database
// print_r($_POST);
$error = ""; //Variable for storing our errors.
if(isset($_POST["username"]))
{
    // print ("KA AS ZINAU");
if(empty($_POST["username"]) || empty($_POST["password"]))
{
$error = "Prašome užpildyti abu laukus.";
// echo ("SUCK IT");
}else 
// print ("KAZKOKIOS KLAIDOS");
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// print "<br>";
// print ("username = ".$username);
 
// To protect from MySQL injection
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($db_connect, $username);
$password = mysqli_real_escape_string($db_connect, $password);
$password = md5($password);
 
//Check username and password from database
$sql="SELECT uid FROM users_login WHERE username='$username' and password='$password'";
// print ($sql);
$result=mysqli_query($db_connect,$sql);
// print_r($result);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
// echo "<br>";
// print_r($row);
 
//If username and password exist in our database then create a session.
//Otherwise echo error.
 
if(mysqli_num_rows($result) == 1)
{
$_SESSION['username'] = $username; // Initializing Session
// print $username;
header("location: backend4.php"); // Redirecting To Other Page
}else
{
$error = "Neteisingas login arba slaptažodis.";
// echo $error;
}
 
}
}

 
?>