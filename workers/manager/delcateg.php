<!DOCTYPE>
<?php
mysql_connect('localhost','root','');

mysql_select_db('system');

$sql="SELECT * FROM CATEGORY";

$records=mysql_query($sql);






?>


<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>





</head>
<body style="text-align:center;">
<h1><b>DELETE CATEGORY HERE </b></h1><br>
<form action="delcategdb.php" method="POST">

<input type="text" placeholder="Enter category name" name="category" required><br><br>
<br><br>
<button type="submit" class="signupbtn">Delete</button>

<br><br><br><br>

<h1>HERE ARE THE RECENTLY ADDED PRODUCTS</h1>
<table>
<tr>
<th>CATEGORY</th>
<th>DATE</th>



</tr>
<?php

while($product=mysql_fetch_assoc($records)){
	
	echo "<tr>";
	echo "<td>".$product['category']."</td>";
	echo "<td>".$product['date']."</td>";

	echo "</tr>";
	
}


?>

</table>



</form>
<br>
<b> GO BACK TO MENU   </b>

<a href="test.php"> <button>click here </button> </a>

</body>



</html>