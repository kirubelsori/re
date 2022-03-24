<!doctype html>
 <?php
     
include "connection.php";

$name 		= $_POST['name'];
$email	    = $_POST['email'];
$password	= $_POST['password'];

$sql = 'INSERT INTO user(name,email,password)
         VALUES("'.$_POST['name'].'","'.$_POST['email'].'","'.$_POST['password'].'")';
		
     

     
$results = mysqli_query($con, $sql);

	if(!$results){
	die("Error on mysql query".mysqli_error($con));
	}
	else{	
			
	
				$nam="<center><h4><font color='#00FF00'>Successful update,</h4></center></font>";
	include "sign up.php";
		 }

           
 ?>

