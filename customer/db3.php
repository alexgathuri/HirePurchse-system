
<?php
include("deleteaccount.php");


session_start(); 

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

			$_SESSION['username']=$username;
			$_SESSION['email']=$email;
			$_SESSION['contact']=$contact;


$sql ="DELETE FROM USER where email =('{$_SESSION['email']}')";


if(!mysqli_query($con,$sql)){
	
	echo 'soryy an error has ocurred';
}
else
	
	{
		
		
	if($password != $password2){
	
	echo"<script>alert('Passwords do not match')</script>";
	header( "refresh:1; url=details.php");
}


else{
	
	
	 $sql2 = $con->query( "SELECT * FROM user WHERE email ='$email'");



        if($sql2 ->num_rows !=0 ){
			
			echo"<script>alert('The Email used already exists, try again with another email')</script>";
	header( "refresh:1; url=details.php");
				
			}





else
	
	{
		
		

$sql ="INSERT INTO user (username,lastname,email,contact,password) VALUES('$username','$lastname','$email','$contact','$encrypt')";


if(!mysqli_query($con,$sql)){
	
	echo 'soryy an error has ocurred';
}
else
	
	{
		echo"<script>alert('You have successfully changed your details, Thank you')</script>";
		
		
			
			
			
			

	}
	}
}
	}
header( "refresh:1; url=details.php");


?>