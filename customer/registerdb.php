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



$username= $_POST['username'];
$email= $_POST['email'];
$contact= $_POST['contact'];
$password= $_POST['password'];
$encrypt= md5($password); 

$sql ="INSERT INTO user (username,contact,email,password) VALUES('$username','$email','$contact','$encrypt')";


if(!mysqli_query($con,$sql)){
	
	echo 'soryy an error has ocurred';
}
else
	
	{
		
		echo 'You have successfuly registered';
	}


header( "refresh:3; url=register.php");

?>