<!DOCTYPE html>
<html>
<head>
<style>

h1 {
    font-family: "Lato", sans-serif;
	animation-name:alex;
	animation-duration:5s;
	animation-iteration-count:infinite;
	animation-direction:relative;
	background-image:url("images/image1.jpg");
}
@keyframes alex{
 0%{background-image:url("images/image1.jpg");}
 50%{background-image:url("images/image2.jpg");}
	100%{background-image:url("images/image1.jpg");}

}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Home Page</title>
	<link rel="stylesheet" href="styles/style.css" media="all" />
</head>
<body>
<!--main content starts-->
	<div class="main_wrapper" style="font-size:50px; color:white; text-align:center; ">
	
		<!--header starts-->
		<div class="header_wrapper" >
			
		 <h1>DAILY OFFERS</h1>
		
		</div> 
		<!--header ends-->
		
		<!--Nav bar starts-->
		<div id="navbar" style="background-color:black;">
		
			<ul id="menu">
			
			
				
		
			</ul> 
			
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					
					<input type="text" name="user_query" placeholder="Search a Product"/>
					<input type="submit" name="search" value="Search"/>
			
				</form>
			</div>
			
		</div> 
		
		<!--Nav bar ends-->
		<div class="content_wrapper" >
		 
			<div id="left_sidebar">
			
				<div  id="sidebar_title" style="font-family:forte;">CATEGORIES</div>
				
				<ul id="cats" style="background-color:black">
					
					<li><a href="#">Phones</a></li>
					<li><a href="#">nyani</a></li>
					<li><a href="#">nyani</a></li>
					<li><a href="#">nyani</a></li>
				
				</ul >
				
				<div id="sidebar_title" style="font-family:forte;">BRANDS</div>
				<ul id="cats" style="background-color:black ">
				<li><a href="#">Phones</a></li>
					<li><a href="#">nyani</a></li>
					<li><a href="#">nyani</a></li>
					<li><a href="#">nyani</a></li>
				
				</ul>
			</div>
			
			<div id="right_content">
			
			<p>
<a href="home.php">
<img border="0" alt="Phone" src="images/category/phones2.jpg" width="100" height="100">
<br>
<p style=" font-size: 20px;">Phones</p>
</a>
</p>
			
			
			
			</div>
				
				
		</div> 
		
		
	
	
	</div>
<!--main content ends-->
</body>
</html>
