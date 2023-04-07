<?php
session_start();
?>

<?php
$con= mysqli_connect('localhost','root','');
if(!$con)
{
	echo 'Not conn to server';
}
if(!mysqli_select_db($con,'system'))
{
	
	echo' Not con to db';
}








 


$sql ="DELETE FROM workers where email =('{$_SESSION['email']}')";


if(!mysqli_query($con,$sql)){
	
	echo 'soryy an error has ocurred';
}
else
	
	{
		
		echo"<script>alert('Your account has been deleted')</script>";
	}


header( "refresh:1; url=../login.php");




?>