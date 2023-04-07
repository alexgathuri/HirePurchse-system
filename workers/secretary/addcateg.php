<!DOCTYPE>
<?php
mysql_connect('localhost','root','');

mysql_select_db('system');

$sql="SELECT * FROM category";

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
<h1><b>INSERT CATEGORY HERE </b></h1><br>
<form action="addcategdb.php" method="POST">

<input type="text" placeholder="Enter Category name" name="category" required><br><br>

<input type="file" placeholder="Insert image" name="image" required><br><br>
<button type="submit" class="signupbtn">Submit</button>
</form>


<br><br>
<b> GO BACK TO MENU   </b><br>

<a href="test.php"> <button>click here </button> </a>
<br><br>

<h1>HERE ARE THE EXISTING CATEGORIES</h1>
<br><br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Category..." title="Type in a name">
<br><br>
<table id="myTable">
<tr class="header">
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