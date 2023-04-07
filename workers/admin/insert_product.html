<!DOCTYPE HTML>

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
		<title>Inserting Product</title>
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
	tinymce.init({ selector:'textarea' });
</script>


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

<form method="post" action="insert_product.php" enctype="multipart/form-data">

	<table width="700" align="center" border="1">
	
		<tr align="center">
		<td colspan="6"><h2>INSERT NEW PRODUCT HERE</h2></td>
		</tr>
		
		<tr>
			<td >Product Name</td>
			<td ><input type="text" name="name" required/></td>
		</tr>
		
		<tr>
			<td >Product Category</td>
			<td >
				<select name="category" required/>
					<option>Select a Category</option>
					<?php
		$get_cats = "select * from category";
$run_cats=mysqli_query($con,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats)){
	
	$cat_title=$row_cats['category'];
	echo"<option value='$cat_title'>$cat_title</option>";
}
		?>
				</select>
			
			</td>
		</tr>
		
		<tr>
			<td>Product type</td>
			<td><input type="text" name="type" required/></td>
		</tr>
		
		
		<tr>
			<td>Product Price</td>
			<td><input type="number" name="price" required/></td>
		</tr>
		<tr>
			<td>Purchase Price</td>
			<td><input type="number" name="oldprice" required/></td>
		</tr>
		<tr>
			<td>Product Quantity</td>
			<td><input type="number" name="quantity" required/></td>
		</tr>
		
		<tr>
			<td>Product Description</td>
			<td><textarea  name="description" ></textarea></td>
		</tr>
		
		<tr>
			<td>Product Photo</td>
			<td><input type="file" name="image" required/></td>
		</tr>
		
		<tr align="center">
			<td colspan="8"><input type="submit" class="button" name="submit" value="INSERT"/></td>
		</tr>
		
	</table>

</form>

<br><br>
<b> GO BACK TO MENU   </b><br><br>

<a href="test.php"> <button>click here </button> </a>
<br><br>

<h1>HERE ARE THE RECENTLY ADDED PRODUCTS</h1>
<table>
<tr>
<th>NAME</th>
<th>TYPE</th>
<th>PRICE</th>
<th>OLD PRICE</th>
<th>QUANTITY</th>
<th>DATE</th>
<th>CATEGORY</th>
<th>IMAGE</th>

</tr>
<?php



while($product=mysql_fetch_assoc($records)){
	
	
	
	
	
	$name =$product['name'];
	$type =$product['type'];
	$price =$product['price'];
	$oldprice =$product['oldprice'];
$quantity =$product['quantity'];
$date =$product['date'];
$category =$product['category'];
$image =$product['image'];	




?>

<tr align="center">
	<td><?php echo $name;?> </td>
	<td><?php echo $type;?> </td>
	<td><?php echo $price;?> </td>	
	<td><?php echo $oldprice;?> </td>	
	<td> <?php echo $quantity;?> </td>
	<td><?php echo $date;?> </td>
	<td><?php echo $category;?> </td>
	<td><img src="image1/<?php echo $image;?>"width="60px" height="60px"/> </td>
	
	
	</tr>
<?php	
}

?>
</table>



</form>



</body>
</html>

<?php
if(isset($_POST['submit']))
{
	
$name= $_POST['name'];
$type= $_POST['type'];
$price= $_POST['price'];
$oldprice= $_POST['oldprice'];
$quantity= $_POST['quantity'];

$category= $_POST['category'];
$description= $_POST['description'];
	
	//getting image
	$image=$_FILES['image']['name'];	
	
	$temp_name1=$_FILES['image']['tmp_name'];
 
move_uploaded_file($temp_name1, "image1/$image");



 $sql2 = $con->query( "SELECT * FROM product WHERE name ='$name'");



        if($sql2 ->num_rows !=0 ){
			
			echo"<script>alert('The Product already exists in the system, please update')</script>";
				
			}
	
	
	
	
	
else{

	
 $insert_product ="INSERT INTO product (name,type,price,oldprice,quantity,date,category,description,image) VALUES('$name','$type','$price','$oldprice','$quantity',NOW(),'$category','$description','$image')";
	$insert_pro = mysqli_query($con,$insert_product);
	
	if($insert_pro){
	echo"<script>alert('product has been inserted')</script>";
	
}

}
}

?>