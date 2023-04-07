<!DOCTYPE html>
<html>
<head>
<style>
body {
    font-family: "Lato", sans-serif;
	animation-name:alex;
	animation-duration:5s;
	animation-iteration-count:infinite;
	animation-direction:relative;
	background-image:url("image1.jpg");
}
@keyframes alex{
 0%{background-image:url("image1.jpg");}
 25%{background-image:url("image2.jpg");}
	50%{background-image:url("image3.jpg");}
	100%{background-image:url("image1.jpg");}

}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    text-align:center;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;

}

.sidenav a:hover{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php">HOME</a>
  <a href="profile.php">PROFILE</a>
  <a href="#">ORDERS</a>
  <a href="aboutus.php">About us</a><br><br><br><br><br><br>
  <a href="login.php">LOG OUT</a>
</div>

<h2>Home</h2>
<span style="font-size:30px;cursor:pointer"  onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "25%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
     
</body>
</html> 
