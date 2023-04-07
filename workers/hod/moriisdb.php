<?php
$connect = mysqli_connect("localhost", "root", "", "system");
$query = "SELECT * FROM sales";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ date:'".$row["date"]."', profit:".$row["profit"].", purchase:".$row["purchase"].", sale:".$row["sale"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>
 
 
<!DOCTYPE html>
<html>
 <head>
  <title>chart with PHP & Mysql | lisenme.com </title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:500px;">
   <h2 align="center">SALES REPORT</h2>
   <h3 align="center">date Profit, Purchase and Sale </h3>   
   <br /><br />
   <div id="chart" ></div>
  </div>
  <br>
<b>GO BACK 	TO MENU </b>
<a href="test.php"> <button> click here </button> </a>
 </body>
</html>
 
<script>
Morris.Line({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'date',
 ykeys:['profit', 'purchase', 'sale'],
 labels:['Profit', 'Purchase', 'Sale'],
 hideHover:'auto',
 stacked:true
});
</script>