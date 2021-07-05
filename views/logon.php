<!-------------------------------------------------------------------------------------------------->
<?php 

	
	
	include '../controllers/LoginPanelController.php';
	
	
?>

<html>
<head>
 <link rel="stylesheet" href="../views/styles/style.css">
</head>


<body>
	<div class="wrapper fadeInDown">
  
	  <div id="formContent">
		<!-- Tabs Titles -->
		<h2 class="active"> Sign In </h2>
		<h2 class="inactive underlineHover"><a href="../views/registration.php">Sign Up</a> </h2>

			<!-- Icon -->
			<div class="fadeIn first">
			<a href="../views/welcome_page.php">  <img src="../storage/images/photo.png" id="icon" alt="User Icon"/></a>
			</div>

			<!-- Login Form -->
			<form  action="../views/logon.php" method="POST" >
			  <input type="text" id="user_name" class="fadeIn second" name="user_name" placeholder="login" required>
			  <input type="text" id="password" class="fadeIn third" name="password" placeholder="password" required>
			  <input type="submit" class="fadeIn fourth" name="login" value="Log In">
			</form>

			<!-- Remind Passowrd -->
			<div id="formFooter">
			  <a class="underlineHover" href="#">Forgot Password?</a><br>
			  <a class="underlineHover" href="../views/registration.php">New User? Create an account</a>
			</div>

	  </div>
	  
	</div>
</body>
</html>