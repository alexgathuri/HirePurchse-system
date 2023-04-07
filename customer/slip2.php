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
								
											
								
                         
		   
		   if(!empty($_SESSION["shopping_cart"]))  {



		   }
		   else{
			   
			  
			   
		   }
	
	
	
	$total = ($total + 0) ;
							
											
								
                          
		   


		   
$con= mysqli_connect('localhost','root','');
if(!$con)
{
	echo 'Not conn to server';
}
if(!mysqli_select_db($con,'system'))
{
	
	echo' Not con to db';
}
          

	


$sql = "INSERT INTO purchases (email,cartprice,date) VALUES('{$_SESSION['email']}','$total ',NOW())";


if(!mysqli_query($con,$sql)){
	
	echo 'sorry an error has ocurred';
}
else
	
	{
		echo"<script>alert('Please wait while your order is being processed, Thank you')</script>";
		
	

	
			header( "refresh:1; url=feedback2.php");		  

}

?>