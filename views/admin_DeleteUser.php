<?php 
	  
	  
	  
	 require '../controllers/admin_CustomerController.php';
	  
	  $r_customer_id = $_GET["customer_id"];
	  
	  $customer = deleteCustomer($r_customer_id);
	  

	  
?>