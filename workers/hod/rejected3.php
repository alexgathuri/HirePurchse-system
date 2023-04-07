<?php   
 session_start(); 

	$connect = mysqli_connect("localhost", "root", "", "system");  

 ?>  
 <!DOCTYPE html> 
 
 <html>  
      <head>  
	  <title> PENDING</title>
           <style>
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
		   </style>
      </head>  
      <body> <br> 
         <h2 style="text-align:center;"><b>PENDING PURCHASES </b></h2> 
		 <br>
               <form style="text-align:center;">
  <input type="text" name="search" placeholder="Search..">
</form>
                <?php  
                $query = "SELECT * FROM purchases where email ='{$_SESSION['email']}' and pending = 'rejected'";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  

		 <button style="float:right;" onclick="myFunction()">Print Document</button>
                <article style="border-style:double;  padding: 1em; overflow: hidden; width:50%; margin-left:20%; margin-top:2%;" > 

<div >  
 <h3 style="text-align:center;"><b><u>BILLING INFORMATION</u></b></h3> 
 <br>
				
	<h3><b>DATE: <?php echo $row["date"]; ?></b>
	<b style = "float:right;" >	ORDER NUMBER: <?php echo $row["id"]; ?></b> 
	</h3> 
<br>
	<h4>Cart price = ksh <?php echo $row["cartprice"]; ?></h4>
		<br>	
	<h4>Deposit of 15% = ksh <?php echo $row["cartprice"]; ?> X 15/100 </h4>
	<br>
	
	<h4><b><u>Deposit</u></b>  = ksh<?php echo $row["cartprice"]; ?>  </h4>
	<br>
	
	<h4>Monthly instalments of 10% = ksh <?php echo $row["cartprice"]; ?> X 10/100 </h4>
	<br>
	
	<h4>Instalments = ksh <?php echo $row["cartprice"]; ?> X 12  for 12 months</h4>
	<br>
	
	<h4><b><u>Monthly instalments</u></b> = ksh <?php echo $row["cartprice"]; ?></h4>
	
	 </article>
	
	
 </div>
 
 <?php
		   }
		  
                     }  
                  
                
	
	
	
	?>
 
 
 
		   <br><br>

<div>


<a href="test2.php"> <button>Back </button> </a></div>



<a href="slipt.php"> <button style="float:right;">proceed </button> </a>
      </body>  
	  
	  <br><br><br><br><br><br><br>
	  
	  <script>
function myFunction() {
    window.print();
}
</script>
 </html>