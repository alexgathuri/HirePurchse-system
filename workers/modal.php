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

  

$sql = mysqli_query($con, "SELECT * FROM workers WHERE email='$username'  and password ='$encrypt'  ");

$rows = mysqli_num_rows($sql);





        if($rows !=0 ){
			
			$data = $sql ->fetch_assoc();
			$name = ($data['username']);
			$contact = ($data['contact']);
			$email = ($data['email']);
			$_SESSION['username']=$name;
			$_SESSION['email']=$email;
			$_SESSION['contact']=$contact;
			
			
			if($data['role']== 'ADMIN'){
				header("Location:admin/test.php" );
				
			}elseif($data['role']== 'SECRETARY'){
				header("Location:secretary/test.php" );
				
			}elseif($data['role']== 'MANAGER'){
				header("Location:manager/test.php" );
				
			} elseif($data['role']== 'HEAD OF DEPARTMENT'){
				header("Location:hod/test.php" );
				
			}else {
			echo"<script>alert('You have not yet been given a role, try again later.')</script>";
			header( "refresh:1; url=login.php");
			}
			
			
			
		}    
	else{
		echo"<script>alert('Wrong username or password, Try again')</script>";	
		header( "refresh:1; url=login.php");
	}
	
	
			
		
	
	
?>