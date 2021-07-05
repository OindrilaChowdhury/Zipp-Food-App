<?php

	require_once '../models/database.php';
		
		
	if(isset($_POST["sign_up"]))						// used in AddCustomer.php
	{
	
		$conn = mysqli_connect($serverName, $userName,  $password, $dbName);

		$customer_id=$_POST["customer_id"];
		
		$customer_name=$_POST["customer_name"];
		$customer_address=$_POST["customer_address"];
		$email_address=$_POST["email_address"];
		$contact_no=$_POST["contact_no"];
		
		$user_name=$_POST["user_name"];
		$password=$_POST["password"];

		
		$query="INSERT  INTO customer_information(customer_id,customer_name,customer_address,email_address,contact_no) VALUES(NULL,'$customer_name','$customer_address','$email_address','$contact_no')";
		
		$result= mysqli_query($conn,$query);
		
		if($result)
		{
			$query2="INSERT INTO login_panel(user_name,password,title,customer_id) VALUES('$user_name','$password','customer',NULL)";
		
			
			$result2= mysqli_query($conn,$query2);
			
		}
		else
		{
			echo "DB error";
		}

		
		
		//header("Location:../views/logon.php");
		echo"
				<script>
				alert(' Your ID is Successfully  Created ');
				alert(' Now Log-In your ID to continue... ');
				window.location.href='../views/logon.php';
				</script>
				";
		
	}
	
?>
