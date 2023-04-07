<?php
session_start();
?>

<!DOCTYPE>



<html>
<head>


<title>feedback</title>



</head>
<body style="text-align:center;">

<?php
echo"<h1>". $_SESSION['username'].", please give us your feedback </h1>" ;
?>

<form action="feedbackdb.php" method="POST" >

<textarea cols="50" rows="6" name="feedback" required></textarea><br><br>
<button type="submit" class="signupbtn">Submit</button>

<br><br><br><br>



</form>
<br>
<b> GO BACK TO MENU   </b>

<a href="test2.php"> <button>click here </button> </a>

</body>



</html>