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


$email= $_POST['email'];
$date= $_POST['date'];
$status= $_POST['status'];

 

$sql ="UPDATE purchases SET pending =('$status') WHERE email = ('$email') and date = ('$date')";


if(!mysqli_query($con,$sql)){
	
	echo 'soryy an error has ocurred';
}
else
	
	{
		$sql2 ="INSERT INTO transit (email) VALUES('$email')";


if(!mysqli_query($con,$sql2)){
	
	echo 'soryy an error has ocurred';
}
else
	
	{
		
		
	}

	
	
		
		
		
		echo"<script>alert('completed')</script>";	
	}


header( "refresh:1; url=pend.php");

?>