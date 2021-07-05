<?php 

	 	include 'Admin_page.php';
	
	require '../controllers/admin_EmployeeController.php';
 

	  $r_employee_id = $_GET["employee_id"];
	  
	  $employee=getEmployee($r_employee_id);

	  
?>






<div class="center">
		
		<table>
		
		
		
				
				
				
	
			<td>
				<img class="item-image" style="margin-right:20px" src="<?php echo $employee["employee_image"];?>"></img>
			</td>
			
	
	
			<td>
				<form method="post" action="../controllers/admin_EmployeeController.php" enctype="multipart/form-data" class="form-horizontal form-material">
					
					<div class="form-group">
					
						<h4 class="text"><b>Employee Name :</b></h4> 
						<input type="text" name="employee_name" value="<?php echo $employee["employee_name"];?>" class="form-control">
						
					</div>	
					
					<div class="form-group">
					
						<h4 class="text"><b>Employee Address :</b></h4> 
						<input type="text" name="employee_address" value="<?php echo $employee["employee_address"];?>" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Email Address :</b></h4> 
						<input type="text" name="email_address" value="<?php echo $employee["email_address"];?>" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Contact No :</b></h4> 
						<input type="text" name="contact_no" value="<?php echo $employee["contact_no"];?>" class="form-control">
						
					</div>
					
					<div class="form-group">
						
						<h4 class="text"><b>Employee position :</b></h4> 
						
						<select name="employee_position"  class="form-control">
							<option selected="selected"><?php echo $employee["employee_position"];?></option>
						
							<option> IT_Specialist </option>
							<option> Receptionist </option>
							<option> Maintaince_Specialist </option>																														
							<option> Delivery Boy</option>
							<option> Cleaner </option>
							<option> Security </option>
							<option> Chef </option>
							<option>  </option>
							
							
						</select>	
						
					</div>
					
					
					<div class="form-group">
					
						<h4 class="text"><b>Salary :</b></h4> 
						<input type="text" name="salary" value="<?php echo $employee["salary"];?>" class="form-control">
						
					</div>	
					
			
					<div class="form-group">
						
						<h4 class="text"><b>Payment Status :</b></h4> 
						
						<select name="payment_status"  class="form-control">
							<option selected="selected"><?php echo $employee["payment_status"];?></option>
							<option> Complete </option>
							<option> (due) </option>
							<option>(partial) </option>
							<option> </option>
						</select>	
						
					</div>
										

			
				
				
				
			
				<div class="form-group">
			
					<h4 class="text"><b>Employee Image :</b></h4> 
					<input type="file" name="employee_image" class="form-control">
			
				</div>

				
<br/>
<br/>
<br/>
									
					<div class="form-group text-center">

					
					<input type="hidden" name="employee_id" value="<?php echo $employee["employee_id"];?>" class="form-control">
					<input type="hidden" name="prev_image" value="<?php echo $employee["employee_image"];?>" class="form-control">	
					
		
						<input type="submit" class="btn btn-primary" name="edit_Employee" value=" Edit/Update Employee Info " style="color:red" class="form-control">
						
					</div>
				
				</form>
			</td>
			
		</table>
		
</div>





