<?php 

	include 'Admin_page.php';
	
	require '../controllers/admin_EmployeeController.php';
	
	
	  $r_employee_id = $_GET["employee_id"];
	  
	  $employee=getEmployee($r_employee_id);

	  

		$employee_information = getAllEmployeeInfo();	                  
	  
?>






<div   class="center" >		
		
		<table>
			<tr>
		
		
				
				
				
			<td align="center">
				<img class="item-image"  src="<?php echo $employee["employee_image"];?>"></img>
				
				<?php
				
				echo '<div class="add-to-cart"><span><a href="admin_EditEmployee.php?employee_id='.$employee["employee_id"].'" class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Update Info</a></span></div>';
		
				
				?>
				
			</td>
			
	
	
			<td align="right">	

					<div class="form-group">
						<h3 class="text"><b>Employee ID	:	</b>
						<i><input type="button" name="employee_id" value="<?php echo $employee["employee_id"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control"> </i></h3>	
					</div>	
							
							
					<div class="form-group" >
					
						<h4 class="text"><b>Employee Name :</b></h4> 
						<input type="button" name="employee_name" value="<?php echo $employee["employee_name"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>	
					
					<div class="form-group">
					
						<h4 class="text"><b>__Employee Address :</b></h4> 
						<input type="button" name="employee_address" value="<?php echo $employee["employee_address"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Email Address :</b></h4> 
						<input type="button" name="email_address" value="<?php echo $employee["email_address"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Contact No :</b></h4> 
						<input type="button" name="contact_no" value="<?php echo $employee["contact_no"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Employee_position :</b></h4> 
						<input type="button" name="employee_position" value="<?php echo $employee["employee_position"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>	
					
					
					<div class="form-group">
					
						<h4 class="text"><b>Salary :</b></h4> 
						<input type="button" name="salary" value="<?php echo $employee["salary"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>	
					
			
					<div class="form-group">
						
						<h4 class="text"><b>Payment Status :</b></h4> 
						<input type="button" name="payment_status" value="<?php echo $employee["payment_status"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">						
						
					</div>
										


				
<br/>
<br/>
<br/>
									
					<div class="form-group text-center">

					
					<input type="hidden" name="employee_id" value="<?php echo $employee["employee_id"];?>" class="form-control">
					<input type="hidden" name="prev_image" value="<?php echo $employee["employee_image"];?>" class="form-control">	
					
								
					</div>
				
				
			</td>
		</tr>	
	</table>
		
</div>








