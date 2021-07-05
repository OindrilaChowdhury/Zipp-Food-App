<?php 
	
	session_start();
	
	if(!isset($_SESSION["LoginUser"]))
	{ 
	}
	
	//if(!isset($_COOKIE["LoginUser"]))
	//{
		
	//	header("Location:login.php");
			
	//}
	 

?>
 

<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="styles/mystyle.css">

<head><link rel="stylesheet" href="../views/styles/style2.css"></head>
<head><link rel="stylesheet" href="../views/styles/style.css"></head>
<body>
<ul>

  <li><a href="../views/add_customer.php">Control Room</a></li>
  <li><a href="https://www.tripadvisor.com/Restaurants-g293936-Dhaka_City_Dhaka_Division.html">Restaurant List</a></li>
  
  <li><a href="../views/admin_AllEmployeeInformation.php">All Empolyee Information</a></li>
  <li><a href="../views/admin_AllUserInformation.php">All User Information</a></li>
  <li><a href="../views/cart.php">Food Cart</a></li>
  <li><a href="../views/Admin_page.php#">Order Deliveries List</a></li>
  <li><a href="../views/Admin_page.php#">Areas</a></li>
  <li><a href="../views/Admin_page.php#">Settings</a></li>
  <li><a href="../views/Admin_page.php#">Reviews</a></li>
  <li><a href="../views/logon.php">Logout</a></li>
</ul><br>

<div class="wrap">
<h1><center><span style="color:Green">Admin Page </span></center></h1><br>
   <div class="search">
   
<center>
	<form class="example" action="../views/food_page.php">
		<input type="text" placeholder="Find your Restaurant..." name="search" >
		<button type="submit"><i class="fa fa-search"></i></button>
	</form>
</center>
   </div>
</div>
</body>
</html>