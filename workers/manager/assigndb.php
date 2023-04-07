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
$role= $_POST['role'];

 

$sql ="UPDATE workers SET role =('$role') WHERE email = ('$email')";


if(!mysqli_query($con,$sql)){
	
	echo 'soryy an error has ocurred';
}
else
	
	{
		
		echo 'YOU  HAVE  SUCCESSFULLY   GIVEN A ROLE ,THANK YOU';
	}


header( "refresh:1; url=assign.php");

?>