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
 
 
 

$image=$_POST['image'];	
	
 

 $sql ="INSERT INTO category (category,date,image) VALUES('$category',NOW(),'$image')";
 

if(!mysqli_query($con,$sql)){
	
	echo 'sorry an error has ocurred';
}
else
	
	{
		echo"<script>alert('You have successfully added a category')</script>";
		
	}
 

header( "refresh:3; url=addcateg.php");

?>