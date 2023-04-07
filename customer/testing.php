

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
			echo '<script>alert("Item  Added")</script>';  
                echo '<script>window.location="testing.php"</script>'; 				
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="testing.php"</script>';  
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
                     echo '<script>window.location="testing.php"</script>';  
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
</head>
<body>

<h1>

<div style = "float:right;"><a href="account.php">Account</a>
<br>
<br>

<a href ="cart.php">Cart</a>
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
	<li><a href="#home">CATEGORIES</a>
	<ul>
	<li><a href="#home">ELECTRONICS</a>
	<ul>
	<li><a href="#home">Laptop</a></li>
	<li><a href="#home">Phones</a></li>
	<li><a href="#home">other</a></li>
	</ul>
	
	</li>
	
	</ul>
	</li>
	<li><a href="#home">ORDERS</a>
	<ul>
	<li><a href="#">VIEW SALES REPORT</a>
	<ul>
	<li><a href="moriisdb.php">VIEW LINE CHART</a></li>
	<li><a href="morris.php">VIEW BAR stacked CHART</a></li>
	<li><a href="morris3.php">VIEW BAR CHART</a></li>
	</ul>
	</li>
	
	<li><a href="">ELECTRONICS</a>
	<ul>
	<li><a href="">VIEW LINE CHART</a></li>
	<li><a href="">VIEW BAR stacked CHART</a></li>
	<li><a href="">VIEW BAR CHART</a></li>
	</ul>
	</li>
	<li><a href="">AUTOMOTIVE</a>
	<ul>
	<li><a href="moriisdb.php">VIEW LINE CHART</a></li>
	<li><a href="morris.php">VIEW BAR stacked CHART</a></li>
	<li><a href="morris3.php">VIEW BAR CHART</a></li>
	</ul></li>
	<li><a href="">HOME APPLIANCES</a>
	<ul>
	<li><a href="moriisdb.php">VIEW LINE CHART</a></li>
	<li><a href="morris.php">VIEW BAR stacked CHART</a></li>
	<li><a href="morris3.php">VIEW BAR CHART</a></li>
	</ul></li>
	<li><a href=""></a>KITCHEN APPLIANCES
	<ul>
	<li><a href="moriisdb.php">VIEW LINE CHART</a></li>
	<li><a href="morris.php">VIEW BAR stacked CHART</a></li>
	<li><a href="morris3.php">VIEW BAR CHART</a></li>
	</ul></li>
	
	</ul></li>
	
	
	
	
	
	
	
	
	<li><a>ACCOUNT DETAILS</a>
	<ul>
	<li><a href="#">VIEW CUSTOMER PURCHASE</a>
	<ul>
	<li><a href="#">PENDING PURCHASES</a></li>
	<li><a href="#">APPROVED PURCHASES</a></li>
	<li><a href="#">REJECTED PURCHASES</a></li>
	</ul>
	</li>
	</ul>
	</li>
	
	
	
	
	
	
	
	
	
	
	
	<li><a href="#home">ACCOUNT DETAILS</a>
	<ul>
	<li><a>ADD USER</a>
	<ul>
	<li><a href="insert2.php">ADD SECRETARY</a></li>
	<li><a href="deleteproduct.php">ADD MANAGER</a></li>
	<li><a href="change.php">ADD HOD</a></li>
	<li><a href="change.php">ADD ADMIN</a></li>
	</ul>
	
	</li>
	<li><a>DELETE USER</a>
	<ul>
	<li><a href="deletesec.php">DELETE SECRETARY</a></li>
	<li><a href="deleteman.php">DELETE MANAGER</a></li>
	<li><a href="deletehod.php">DELETE HEAD OF DEPARTMENT</a></li>
	<li><a href="deleteadmin.php">DELETE ADMIN</a></li>
	</ul>
	</li>
	<li><a>VIEW WORKERS</a>
	<ul>
	<li><a href="assign.php">VIEW WORKERS WITHOUT ROLES</a></li>
	<li><a href="viewworkers2.php">VIEW ALL WORKERS</a></li>
	</ul>
	</li>
	</ul>
	</li>
	
	
	
	
	
	
	
	
	
	
	
	
	<li><a href="#home">PRODUCT DETAILS</a>
	<ul>
	<li><a href="#home">EDIT PRODUCT</a>
	<ul>
	<li><a href="insert2.php">ADD PRODUCT</a></li>
	<li><a href="deleteproduct.php">DELETE PRODUCT</a></li>
	<li><a href="change.php">CHANGE PRODUCT</a></li>
	</ul>
	</li>
	<li><a>VIEW PRODUCT</a>
	<ul>
	<li><a href="view.php">VIEW ALL PRODUCT</a></li>
	<li><a href="#home">VIEW EXISTNG CATEGORIES</a></li>
	<li><a href="#home">VIEW NEW PRODUCTS
	</a></li>
	</ul>
	</li>
	</li>
	</ul>
	
	
	
	
	
	
	
	
	<li><a>SERVICES</a>
	<ul>
	<li><a href="feedback.php">GIVE FEEDBACK</a></li>
	<li><a href="aboutus.php">ABOUT US</a></li>
	</ul>
	</li>
  
  
  
</div>

<article style="border-style:1px solid #BDC3C7; background-color:white; margin-left: 350px;  padding: 1em; overflow: hidden;font-family:Showcard Gothic; width:70%; ">
 
  <div class="col-md-2" ></div>
  
<h2 style="text-align:center;"><u>FEATURED PRODUCTS</u></h2>
<form style="text-align:center;">
  <input type="text" name="search" placeholder="Search..">
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
                <div class="col-md-3"   style="float: left; width: 30%; margin-right: 3%; margin-bottom: 1em; ">  
                     <form method="post" action="testing.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:3px; padding:16px;" align="center">  
                               <img src="image1/<?php echo $row["image"]; ?> "width="240px" height="190px"" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4> 
							   <h4 class="text-danger"><s>KSH <?php echo $row["oldprice"]; ?></s></h4>
                               <h4 class="text-danger">KSH <?php echo $row["price"]; ?></h4>  
                               <input type="number" name="quantity" class="form-control" value="1" placeholder="Enter quanity" required />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                
 
  
  </article>
  
  
</body>
</html>
