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



$name= $_POST['name'];

 

$sql ="DELETE FROM product WHERE name = ('$name')";


if(!mysqli_query($con,$sql)){
	
	echo 'soryy an error has ocurred';
}
else
	
	{
		
		echo 'YOU  HAVE  SUCCESSFULLY   DELETED A  PRODUCT ,THANK YOU';
	}


header( "refresh:3; url=deleteproduct.php");

?>