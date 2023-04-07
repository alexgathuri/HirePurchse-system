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

 

$sql ="DELETE FROM workers WHERE username = ('$username')";


if(!mysqli_query($con,$sql)){
	
	echo 'sorry an error has ocurred';
}
else
	
	{
		
		echo 'YOU  HAVE  SUCCESSFULLY   DELETED A  USER ,THANK YOU';
	}


header( "refresh:3; url=deletesec.php");

?>