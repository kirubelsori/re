
<?php
include "connection.php";
session_start();

$email	= $_POST['email'];
$pass 	=$_POST['password'];

$sql = 'SELECT * FROM user WHERE email="'.$_POST['email'].'" AND password="'.$_POST['password'].'"';

	
	$result = mysqli_query($con, $sql);





	if (mysqli_num_rows($result)==1){
	    //Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] 		= $member['ID'];
			$_SESSION['SESS_NAME'] 				= $member['name'];
			$_SESSION['SESS_EMAIL'] 	   		= $member['email'];
			$_SESSION['SESS_POSITION'] 	    	=$member['position'];
			session_write_close();
			
			if($member['position']=='admin'){
			header("location: admin.php");
			}
			
			else if($member['position']=='user'){
			header("location: user.php");
			}
			
	        }
					
			else{

			echo '<script language="javascript">alert("Email and password do not match. Please try again.  ")</script>';
			//die("Error on mysql query".mysqli_error($con));
			include "sign up.php";
			//exit();
			}



			/*if (mysqli_num_rows($result)==1){
	
				header("location: user.php");
				exit();
				
				
				}	
			else{
			$error="Incorrect username or password";
			//die("Error on mysql query".mysqli_error($con));
			include "login.php";
			//exit();
			}
	*/
			
			
?>
<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
  alert(location.hostname);
}
</script>