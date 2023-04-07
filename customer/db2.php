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
$lastname= $_POST['lastname'];
$email= $_POST['email'];
$contact= $_POST['contact'];
$password= $_POST['password'];
$password2= $_POST['password2'];
$encrypt= md5($password);  

if($password != $password2){
	
	echo"<script>alert('Passwords do not match')</script>";
	header( "refresh:3; url=register2.php");
}


else{
	
	
	 $sql2 = $con->query( "SELECT * FROM user WHERE email ='$email'");



        if($sql2 ->num_rows !=0 ){
			
			echo"<script>alert('The Email used already exists, try again with another email')</script>";
	header( "refresh:3; url=register2.php");
				
			}





else
	
	{
		
		

$sql ="INSERT INTO user (username,lastname,email,contact,password) VALUES('$username','$lastname','$email','$contact','$encrypt')";


if(!mysqli_query($con,$sql)){
	
	echo 'soryy an error has ocurred';
}
else
	
	{
		echo"<script>alert('You have successfully registered, Thank you')</script>";
		
	}

	
	

header( "refresh:1; url=login.php");
}
}
?>