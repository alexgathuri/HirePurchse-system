<?php
session_start();
?>
<!DOCTYPE html>

<?php
mysql_connect('localhost','root','');

mysql_select_db('system');

$sql="SELECT * FROM PRODUCT";

$records=mysql_query($sql);






?>

<?php

include("includes/db.php");

?>

<html>
<head>
<title>ADMIN</title>

<style>
body{
padding:0;
margin:0;
background-image:url(images/login4.jpg);
}

.menu ul{
list-style:none;
margin:0;
float: left;
max-width: 160px;

}
 .menu li {
        list-style: none;
        position: relative;
      
    }

.menu ul li{
padding:15px;
postition:relative;
width:200px;
border-top:1px solid #BDC3C7;
border-right:1px solid #BDC3C7;
border-bottom:1px solid #BDC3C7;
border-left:1px solid #BDC3C7;
font-family:Showcard Gothic;
background-color:white;
text-align:center;

}

.menu ul li a{
color:black;
text-decoration:none;
}
.menu ul ul{
opacity:0;
visibility:hidden;
transition:all 0.3s;
position:absolute;
left:85%;
top:-2%;
}
.menu ul ul ul{
opacity:0;
visibility:hidden;
transition:all 0.3s;
position:absolute;
left:85%;
top:-2%;
}


.menu ul li:hover > ul {
opacity:1;
visibility: visible;

}
.menu ul li:hover{
background-color:#1E90FF;
}

h1{
text-align:center;
background-color:white;
border-bottom:1px solid #BDC3C7;
border-top:1px solid #BDC3C7;
}
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
input[type=text]:focus {
    width: 50%;

}
.button {
    background-color: #48D1CC;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}


.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}


</style>
</head>
<body>

<h1><u>MANAGER</u>
<br>
<div style = "float:right;" ><a style="text-decoration:none;" href="../logout.php">Log out</a></div>
<br>
<?php
echo 'Welcome '.$_SESSION['username'];
?>
<br>
<br>
<?php
echo $_SESSION['email'];
?>

<br>

</h1>
<div class="menu">
<ul>

<li><a href="#home">MY ACCOUNT</a>
	<ul>
	<li><a href="details.php">CHANGE ACCOUNT DETAILS</a>
	</li>
	<li><a href="deleteaccount.php">DELETE ACCOUNT</a>	
	</li>
	</ul>
	</li>





	<li><a href="#home">CATEGORIES</a>
	<ul>
	<li><a href="#home">EDIT CATEGORIES</a>
	<ul>
	<li><a href="addcateg.php">ADD NEW CATEGORY</a></li>
	<li><a href="delcateg.php">DELETE EXISTNG CATEGORY</a></li>

	</ul>
	
	</li>
	<li><a href="#home">VIEW CATEGORIES</a>
	<ul>
	<li><a href="allcateg.php">VIEW ALL CATEGORIES</a></li>
	

	</ul>
	
	</li>
	</ul>
	</li>
	<li><a href="#home">REPORTS</a>
	<ul>
	<li><a href="#">VIEW SALES REPORT</a>
	<ul>
	<li><a href="moriisdb.php">VIEW LINE CHART</a></li>
	<li><a href="morris.php">VIEW BAR stacked CHART</a></li>
	<li><a href="morris3.php">VIEW BAR CHART</a></li>
	</ul>
	</li>
	
	
	
	</ul></li>
	
	
	
	
	
	
	
	
	<li><a href="">CUSTOMER DETAILS</a>
	<ul>
	<li><a href="#">VIEW CUSTOMER PURCHASE</a>
	<ul>
	<li><a href="pend.php">PENDING PURCHASES</a></li>
	<li><a href="trans.php">intransit PURCHASES</a></li>
	<li><a href="reject.php">REJECTED PURCHASES</a></li>
	
	</ul>
	</li>
	<li><a href="feed2.php">VIEW CUSTOMER M-PESA MESSAGES</a>
	</li>
	</ul>
	</li>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	<li><a href="">FEEDBACK</a>
	<ul>
	<li><a href="">CUSTOMER FEEDBACK</a>
	<ul>
	<li><a href="feed.php">VIEW CUSTOMER FEEDBACK</a></li>
	</ul>
	</li>
	</ul>
	</li>
  
  
  
</div>


<article style="border-style:1px solid #BDC3C7; background-color:white; margin-left: 350px;  padding: 1em; overflow: hidden;font-family:Showcard Gothic; width:65%; ">
 
  <div class="col-md-2" ></div>
  
  <div class="col-md-8" >
  <div class="row" >
<h2 style="text-align:center;"><u>FEATURED PRODUCTS</u></h2>
<form style="text-align:center;">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..." title="Type in a name">
<br><br><br>
  <table id="myTable">
</form>
  <?php
   



while($product=mysql_fetch_assoc($records)){
	
	
	
	
	
	$name =$product['name'];
	$type =$product['type'];
	$price =$product['price'];
	$oldprice =$product['oldprice'];
$quantity =$product['quantity'];
$date =$product['date'];
$category =$product['category'];
$description =$product['description'];
$image =$product['image'];	



	
?>
  <tr align="center"  style="float: left; width: 20%; margin-right: 10%; margin-bottom: 0.5em;">
	<td><img src="image1/<?php echo $image;?>"width="250px" height="200px"/> <br><br>
	<?php echo $name;?> <br><br>
	<?php echo $price;?><br><br>
	
	<?php echo $category;?>
	
	</td>

	 <?php
}
?>
  </table>
	
 
  </div>
  
  </div>
  
  
  </article>
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
