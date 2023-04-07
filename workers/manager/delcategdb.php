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



$category= $_POST['category'];

 

$sql ="DELETE FROM category WHERE category = ('$category')";


if(!mysqli_query($con,$sql)){
	
	echo 'sorry an error has ocurred';
}
else
	
	{
		
		echo 'YOU  HAVE  SUCCESSFULLY   DELETED A  CATEGORY,THANK YOU';
	}


header( "refresh:3; url=delcateg.php");

?>