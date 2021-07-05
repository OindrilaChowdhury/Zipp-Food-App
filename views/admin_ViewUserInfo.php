<?php 
	
	include 'Admin_page.php';
	
	require '../controllers/admin_CustomerController.php';

	  
	  $r_customer_id = $_GET["customer_id"];
	  
	  $customer=getCustomer($r_customer_id);

	  

		$customer_information = getAllCustomerInfo();	                  
	  
?>






<div   class="center" >

				
		<table>
			<tr>
		
		
			<td align="center">
				<img class="item-image"  src="<?php echo $customer["customer_image"];?>"></img>
				
				<?php
				
				echo '<div class="add-to-cart"><span><a href="admin_EditUser.php?customer_id='.$customer["customer_id"].'" class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Update Info</a></span></div>';
		
				
				?>
				
			</td>
			
	
	
			<td align="right">	

					<div class="form-group">
						<h3 class="text"><b>Customer ID	:	</b>
						<i><input type="button" name="customer_id" value="<?php echo $customer["customer_id"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control"> </i></h3>	
					</div>	
							
							
					<div class="form-group" >
					
						<h4 class="text"><b>Customer Name :</b></h4> 
						<input type="button" name="customer_name" value="<?php echo $customer["customer_name"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>	
					
					<div class="form-group">
					
						<h4 class="text"><b>__Customer Address :</b></h4> 
						<input type="button" name="customer_address" value="<?php echo $customer["customer_address"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Email Address :</b></h4> 
						<input type="button" name="email_address" value="<?php echo $customer["email_address"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Contact No :</b></h4> 
						<input type="button" name="contact_no" value="<?php echo $customer["contact_no"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Order Status :</b></h4> 
						<input type="button" name="order_status" value="<?php echo $customer["order_status"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>	
					
			
					<div class="form-group">
						
						<h4 class="text"><b>Payment Status :</b></h4> 
						<input type="button" name="payment_status" value="<?php echo $customer["payment_status"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">						
						
					</div>
										


				
<br/>
<br/>
<br/>
									
					<div class="form-group text-center">

					
					<input type="hidden" name="customer_id" value="<?php echo $customer["customer_id"];?>" class="form-control">
					<input type="hidden" name="prev_image" value="<?php echo $customer["customer_image"];?>" class="form-control">	
					
					</div>
				
				
			</td>
		</tr>	
	</table>
		
</div>





