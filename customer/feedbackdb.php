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




$feedback= $_POST['feedback'];




 


$sql ="INSERT INTO feedback (username,email,feedback) VALUES('{$_SESSION['username']}','{$_SESSION['email']}','$feedback')";


if(!mysqli_query($con,$sql)){
	
	echo 'soryy an error has ocurred';
}
else
	
	{
		
		echo"<script>alert('Thank you for your feedback')</script>";
	}


header( "refresh:3; url=feedback.php");




?>