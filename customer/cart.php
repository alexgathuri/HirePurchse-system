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
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
	  <title> CART</title>
           
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>ksh <?php echo $values["item_price"]; ?></td>  
                               <td>ksh <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]); 
																		
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">ksh <?php echo number_format($total, 2); ?></td>  
							   
                               <td></td>  
                          </tr>  
                          <?php  
                          } 
								
											
								
                          ?>  
                     </table>  
					 
                </div>  
           </div>  
           <br />  
		   
		   
		   <?php
		   
		   if(!empty($_SESSION["shopping_cart"]))  {



		   ?>
		   <button style="float:right;" onclick="myFunction()">Print Document</button>
		   <article style="border-style:double;  padding: 1em; overflow: hidden; width:50%; margin-left:20%; margin-top:2%;" >
		   
		   
 <div >
 <h3 style="text-align:center;"><b><u>BILLING INFORMATION</u></b></h3> 
 <br>
				
	<h3><b>DATE: <?php echo  date("Y/m/d")   ?></b>
	<b style = "float:right;" >	TIME: <?php echo  date("h:i:sa")  ?></b> 
	</h3> 
<br>
	<h4>Cart price = ksh <?php echo number_format($total + 0)  ?>  </h4>
		<br>	
	<h4>Deposit of 15% = ksh <?php echo number_format($total, 2); ?> X 15/100 </h4>
	<br>
	
	<h4><b><u>Deposit</u></b>  = ksh <?php echo number_format($total* 0.15  ) ;   ?>  </h4>
	<br>
	
	<h4>Monthly instalments of 10% = ksh <?php echo number_format($total, 2); ?> X 10/100 </h4>
	<br>
	
	<h4>Instalments = ksh <?php echo number_format($total* 0.10  ) ;   ?> X 12  for 12 months</h4>
	<br>
	
	<h4><b><u>Monthly instalments</u></b> = ksh <?php echo number_format($total* 0.10  )  ;   ?></h4>
	
	
	
	
 </div>
 </article>
 <br>
 <a href="slipt.php"> <button style="float:right;">proceed </button> </a>
 <?php
		   }
		   else{
			   
			  
			   
		   }
	
	
	
	?>
 
 
 
		   <br><br>

<div>
<a href="test2.php"> <button>Back </button> </a></div>




      </body>  
	  
	  <br><br><br><br><br><br><br>
	  
	  <script>
function myFunction() {
    window.print();
}
</script>
 </html>