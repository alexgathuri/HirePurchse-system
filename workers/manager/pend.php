<!DOCTYPE>
<?php
mysql_connect('localhost','root','');

mysql_select_db('system');

$sql="SELECT * FROM purchases where pending ='' ";

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
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

</style>





</head>
<body style="text-align:center;">

<h1>PENDING PURCHASES</h1>
<br><br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<br><br>
<table id="myTable">
<tr class="header">

<th>EMAIL</th>
<th>DATE</th>
<th>AMOUNT</th>


</tr>
<?php

while($product=mysql_fetch_assoc($records)){
	
	echo "<tr>";
	
	echo "<td>".$product['email']."</td>";
	echo "<td>".$product['date']."</td>";
	echo "<td>".$product['cartprice']."</td>";
	echo "</tr>";
	
}



?>

</table>



</form>
<br>
<b>GO BACK  </b>
<a href="test.php"> <button>Click here </button> </a>


<form action="penddb.php" method="POST">
 
 
 <br><br><br><br>
 <h2>STATUS</h2>
<input type="text" placeholder="Enter name" name="email" required><br><br>
<input type="date" placeholder="Enter name" name="date" required><br><br>
<select name ="status">
<option value ="ACCEPT">Accept</option>
<option value ="REJECT">reject</option>


</select>


<br><br>
<button type="submit" class="signupbtn">complete</button>




</form>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>



</html>