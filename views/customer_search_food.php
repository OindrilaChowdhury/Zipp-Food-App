<html>
<head><link rel="stylesheet" href="../views/styles/style.css"></head>
<body background="../storage/images/food1.png">
<center>
<img src="../storage/images/photo.png" width="200" height="100" title="Zipp Food" alt="Logo of a ZippFood" />
</center>
<center><h3>
<button class="btn"><i class="fa fa-home"><a href="../views/customer_account.php"> My Account</a></i></button>
<button class="btn"><i class="fa fa-bars"><a href="../views/add_order.php"> My Orders</a></i></button>
<button class="btn"><i class="fa fa-folder"></i><a href="../views/terms&conditions.php"> Terms & Conditions</a></button>
<button class="btn"><i class="fa fa-bars"></i>Help Center </button>
<button class="btn"><a href="../views/logon.php">Log Out</a></button>
</h3>
<hr><br><br>

<h1><center><span style="color:white" class="underlinehover">Order food here</span></center></h1>

	
<!-- Load icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- The form -->
<center>
	<form class="example" action="../views/food_page.php">
		<input type="text" placeholder="Find your food..." name="search" >
		<button type="submit"><i class="fa fa-search"></i></button>
	</form>
</center>

</body>
</html>


