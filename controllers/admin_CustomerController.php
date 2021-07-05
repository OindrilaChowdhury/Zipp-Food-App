<?php

	require_once '../models/database.php';
	
	if(isset($_POST["add_Customer"]))						
	{
		insertCustomer();
	}
	else if(isset($_POST["edit_Customer"]))					
	{
		editCustomer();
	}
	 
	
	function getAllCustomerInfo()							
	{
		$query ="SELECT * FROM customer_information";
		
		$customer_information = get($query);
		
		return $customer_information;
		
	}
	
	function getCustomer($customer_id)						
	{
		
		$query="SELECT * FROM customer_information WHERE customer_id=$customer_id";

		
		$customer=get($query);
		
		return $customer[0];
		
	}
	
	
	
	
	function deleteCustomer($customer_id)					
	{  
	
		$query="DELETE FROM customer_information WHERE customer_id=$customer_id";
				
		$customer=get($query);
			
		echo $query;
		
		execute($query);
			
		//header("Location:../views/admin_AllUserInformation.php");
		echo"
				<script>
				alert(' Data is Successfully  Deleted ');
				window.location.href='../views/admin_AllUserInformation.php';
				</script>
				";
		
	}
	
	
	
	
	function insertCustomer()								
	{	
	
		$customer_name=$_POST["customer_name"];
		$customer_address=$_POST["customer_address"];
		$email_address=$_POST["email_address"];
		$contact_no=$_POST["contact_no"];
		$order_status=$_POST["order_status"];		
		$payment_status=$_POST["payment_status"];



		 
		$target_dir="../storage/Customer_Image/";
		
        $target_file = $target_dir . basename($_FILES["customer_image"]["name"]);
		
        $uploadOk = 1;
		
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
        move_uploaded_file($_FILES["customer_image"]["tmp_name"], $target_file);
		
	
		
		$query="INSERT INTO customer_information VALUES(NULL,'$customer_name','$customer_address','$email_address','$contact_no','$order_status','$payment_status','$target_file')";
		
		execute($query);
		
		//header("Location:../views/admin_AllUserInformation.php");
		echo"
				<script>
				alert(' Data is Successfully  Added ');
				window.location.href='../views/admin_AllUserInformation.php';
				</script>
				";
		
	}
	
	
	function editCustomer()									
	{
		
		$customer_id=$_POST["customer_id"];
		$customer_name=$_POST["customer_name"];
		$customer_address=$_POST["customer_address"];
		$email_address=$_POST["email_address"];
		$contact_no=$_POST["contact_no"];
		$order_status=$_POST["order_status"];		
		$payment_status=$_POST["payment_status"];
		
		$target_file=$_POST["prev_image"];


		 
		if(file_exists($_FILES['customer_image']['tmp_name']) || is_uploaded_file($_FILES['customer_image']['tmp_name'])) 
		{
			$target_dir="../storage/Customer_Image/";
			
			$target_file = $target_dir . basename($_FILES["customer_image"]["name"]);
			
			$uploadOk = 1;
			
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			move_uploaded_file($_FILES["customer_image"]["tmp_name"], $target_file);
			
			
		}
		

		
		$query="UPDATE customer_information SET customer_name='$customer_name',customer_address='$customer_address',email_address='$email_address',contact_no='$contact_no',order_status='$order_status',payment_status='$payment_status',customer_image='$target_file' WHERE customer_id=$customer_id";


		echo $query;
		
		execute($query);
		
		//header("Location:../views/admin_AllUserInformation.php");
		echo"
				<script>
				alert(' Data is Successfully  Edited ');
				window.location.href='../views/admin_AllUserInformation.php';
				</script>
				";
		
	}

?>



		