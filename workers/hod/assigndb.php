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
$role= $_POST['role'];

 

$sql ="UPDATE workers SET role =('$role') WHERE username = ('$username')";


if(!mysqli_query($con,$sql)){
	
	echo 'soryy an error has ocurred';
}
else
	
	{
		
		echo 'YOU  HAVE  SUCCESSFULLY   GIVEN A ROLE ,THANK YOU';
	}


header( "refresh:3; url=assign.php");

?>