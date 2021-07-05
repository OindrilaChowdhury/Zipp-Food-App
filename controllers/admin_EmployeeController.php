<?php

	require_once '../models/database.php';
	
	if(isset($_POST["add_Employee"]))						
	{
		insertEmployee();
	}
	else if(isset($_POST["edit_Employee"]))					
	{
		editEmployee();
	}
	 
	
	function getAllEmployeeInfo()							
	{
		$query ="SELECT * FROM employee_information";
		
		$employee_information = get($query);
		
		return $employee_information;
		
	}
	
	function getEmployee($employee_id)						
	{
		
		$query="SELECT * FROM employee_information WHERE employee_id=$employee_id";

		
		$employee=get($query);
		
		return $employee[0];
		
	}
	
	
	
	function deleteEmployee($employee_id)					
	{  
	
		$query="DELETE FROM employee_information WHERE employee_id=$employee_id";
				
		$employee=get($query);
			
		echo $query;
		
		execute($query);
			
		//header("Location:../views/admin_AllEmployeeInformation.php");
		echo"
				<script>
				alert(' Data is Successfully  Deleted ');
				window.location.href='../views/admin_AllEmployeeInformation.php';
				</script>
				";
		
	}
	
	
	
	
	function insertEmployee()								
	{	
	
		$employee_name=$_POST["employee_name"];
		$employee_address=$_POST["employee_address"];
		$email_address=$_POST["email_address"];
		$contact_no=$_POST["contact_no"];
		$employee_position=$_POST["employee_position"];
		$salary=$_POST["salary"];		
		$payment_status=$_POST["payment_status"];


		$target_dir="../storage/Employee_Image/";
		
        $target_file = $target_dir . basename($_FILES["employee_image"]["name"]);
		
        $uploadOk = 1;
		
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
        move_uploaded_file($_FILES["employee_image"]["tmp_name"], $target_file);
		
		

		
		$query="INSERT INTO employee_information VALUES(NULL,'$employee_name','$employee_address','$email_address','$contact_no','$employee_position','$salary','$payment_status','$target_file')";
		
		execute($query);
		
		//header("Location:../views/admin_AllEmployeeInformation.php");
		echo"
				<script>
				alert(' Data is Successfully  Added ');
				window.location.href='../views/admin_AllEmployeeInformation.php';
				</script>
				";
		
		
	}
	
	
	function editEmployee()									
	{
		
		$employee_id=$_POST["employee_id"];
		$employee_name=$_POST["employee_name"];
		$employee_address=$_POST["employee_address"];
		$email_address=$_POST["email_address"];
		$contact_no=$_POST["contact_no"];
		$employee_position=$_POST["employee_position"];
		$salary=$_POST["salary"];		
		$payment_status=$_POST["payment_status"];
		
		$target_file=$_POST["prev_image"];

		 
		if(file_exists($_FILES['employee_image']['tmp_name']) || is_uploaded_file($_FILES['employee_image']['tmp_name'])) 
		{
			$target_dir="../storage/Employee_Image/";
			
			$target_file = $target_dir . basename($_FILES["employee_image"]["name"]);
			
			$uploadOk = 1;
			
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			move_uploaded_file($_FILES["employee_image"]["tmp_name"], $target_file);
			
		}
		

		
		$query="UPDATE employee_information SET employee_name='$employee_name',employee_address='$employee_address',email_address='$email_address',contact_no='$contact_no',employee_position='$employee_position',salary='$salary',payment_status='$payment_status',employee_image='$target_file' WHERE employee_id=$employee_id";


		echo $query;
		
		execute($query);
		
	//	header("Location:../views/admin_AllEmployeeInformation.php");
			echo"
				<script>
				alert(' Data is Successfully  Edited ');
				window.location.href='../views/admin_AllEmployeeInformation.php';
				</script>
				";
		
	}

?>
