<!doctype html>
<?php
$host="localhost";
$user="root";
$pass="";
$db = "relink";

$con = mysqli_connect($host,$user,$pass,$db);
//$db = mysqli_select_db($con,'poll');
$db = mysqli_select_db($con, $db);
if(!$con){
die("Connection Error".mysqli_error());
}

?>

