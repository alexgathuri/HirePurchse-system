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
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="cart.php"</script>';  
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
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      }  
 }  
 
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                           
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]); 
																		
                               }  
                           
                          } 
								
											
								
                          
		   


		   ?>
		   
 <html>
<head>
<title>Log in</title>
<style>
body{
	background-image:url(images/login4.jpg);
}
</style>
</head>
<body>
		<div>
			

       <form autocomplete="off" method="post" action="slip2.php" style="margin-top:200px;">
<table height="300" width="600" align="center" bgcolor="white" style="border:1px solid black;border-radius:15px;margin:auto;">
<tr align="center">
<td >
<h2><u>PAYMENT</u></h4>
<h4>BUSINESS NUMBER: 34245</h4>
<h4>ACCOUNT NUMBER: 34211</h4>
<h4>ENTER AMOUNT: ksh <?php echo number_format($total* 0.15  ) ;   ?> </h4>
<h4>(ENTER YOUR PIN)</h4>
<h4>CLICK DONE WHEN YOU HAVE FINISHED PAYING</h4>



</td>

</tr>

<tr align="center">
<td colspan="3" style="font-weight:bolder;padding:10px;margin:auto;">
<button class="button" ><a style= "text-decoration:none;" href="cart.php">BACK</a></button><br><br>
<input type="submit" class="button" name="login" value="DONE"/></td>
<br>

</tr>
</table>
</form>









		</div>

	</div>
</div>


</div>

</body>
</html>




