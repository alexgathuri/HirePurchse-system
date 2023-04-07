<?php
session_start();
?>

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

$password= $_POST['password'];

$encrypt= md5($password); 

  

$sql = mysqli_query($con, "SELECT * FROM user WHERE email='$username'  and password ='$encrypt'  ");

$rows = mysqli_num_rows($sql);





        if($rows !=0 ){
			
			$data = $sql ->fetch_assoc();
			$name = ($data['username']);
			$contact = ($data['contact']);
			$email = ($data['email']);
			$_SESSION['username']=$name;
			$_SESSION['email']=$email;
			$_SESSION['contact']=$contact;
			
			
			header("Location:test2.php" );
			
			
			
		}    
	else{
		echo"<script>alert('Wrong username or password, Try again')</script>";	
		header( "refresh:1; url=login.php");
	}
	
	
			
		
	
	
?>