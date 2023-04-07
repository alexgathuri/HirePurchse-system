

<?php   
 session_start(); 
 
 $connect = mysqli_connect("localhost", "root", "", "system");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;
				echo '<script>alert("Item added to cart")</script>';  
                
					 				
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="test2.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;
				
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="test2.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  

<!DOCTYPE html>
<html>
<head>
<title>HOME</title>
<style>
body{
padding:0;
margin:0;
background-image:url(images/login.jpg);
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
background-color:	#FFFAFA;
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
   
    transition-duration: 0.4s;
}


.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

	
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<h1>

<div style = "float:right; "><a style="text-decoration:none;"  href="logout.php">log out</a>
<br>
<br>
<a class="fa fa-cart-arrow-down" style="font-size:48px;color:red; text-decoration:none;"   href ="cart.php"></a>
</div>

<?php
echo "Welcome </b>" .$_SESSION['username'];
?>
<br><br>
<?php
echo $_SESSION['email'];
?>
<br>



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
	
	
	
	
	
	<li><a href="#home">ORDERS</a>
	<ul>
	<li><a href ="cart.php">VIEW CART</a>
	
	</li>
	
	<li><a href="">PURCHASES</a>
	<ul>
	<li><a href="pend.php">PENDING PURCHASES</a></li>
	<li><a href="trans.php"> IN TRANSIT</a></li>
	<li><a href="reject.php"> REJECTED PURCHASES</a></li>
	</ul>
	</li>
	<li><a href="">VIEW PURCHASES</a>
	<ul>
	<li><a href="moriisdb.php">VIEW LINE CHART</a></li>
	<li><a href="morris.php">VIEW BAR stacked CHART</a></li>
	<li><a href="morris3.php">VIEW BAR CHART</a></li>
	</ul>
	</li>
	
	
	
	</ul></li>
	
	
	
	
	
	
	
	
	
	<li><a>SERVICES</a>
	<ul>
	<li><a href="feedback.php">GIVE FEEDBACK</a></li>
	
	</ul>
	</li>
  
  
  
</div>

<article style="border-style:1px solid #BDC3C7; background-color:white; margin-left: 350px;  padding: 1em; overflow: hidden;font-family:Showcard Gothic; width:70%; ">
 
 
  
<h2 style="text-align:center;"><u>FEATURED PRODUCTS</u></h2>
<form style="text-align:center;">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..." title="Type in a name">
<table id="myTable">
</form>
<br><br>
  <div class="container" style="width:700px; width: 100%;">  
                
                <?php  
                $query = "SELECT * FROM product ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <tr class="col-md-3"   style="float: left; width: 30%; margin-right: 3%; margin-bottom: 1em; ">  
                     <form method="post" action="test2.php?action=add&id=<?php echo $row["id"]; ?>">  
                         <td> <div style="border:1px solid #333; border-radius:3px; padding:16px;" align="center">  
                               <img src="../workers/admin/image1/<?php echo $row["image"]; ?> "width="240px" height="190px"" class= img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4> 
                               <h4 class="text-danger">KSH <?php echo $row["price"]; ?></h4>  
                               <input type="number" name="quantity" class="form-control" value="1"  min="1" max="<?php echo $row["quantity"]; ?>"/>  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
</td>							   
                          </div>  
                     </form>  
					 </tr>
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                
 
  </table>
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
