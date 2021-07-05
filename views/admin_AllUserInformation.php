<?php 

	include 'Admin_page.php';
	
	require '../controllers/admin_CustomerController.php';
	
	$customer_information = getAllCustomerInfo();
	
	
	
?>




<div >


<br/>
<br/>
<br/>



				

	<script>		
		
		function searchCustomer()
			{
				http = new XMLHttpRequest();
				
				var search_word = document.getElementById("search_input").value;
				
				http.onreadystatechange = function()
				{
					if(http.readyState==4 && http.status== 200)
					{
						document.getElementById("search_result").innerHTML=http.responseText;
					}
					
				}
				
				http.open("GET","manager_Search_customer.php?sk="+search_word,true);
				http.send();
				
			}
		
		
		</script>

			<div  class="center">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text"  id="search_input" onkeyup="searchCustomer()" placeholder="Search by CUSTOMER Details" class="form-control" />
				</div>
			</div>
				
			<div id="search_result">
			</div>



	<table class="table table-striped">
		<thead>
		
			<th></th>
			<th></th>
			
			<th><u> Customer ID </u></th>
			<th><u> Customer Name </u></th>
			<th><u> Customer Address </u></th>
			<th><u> Email Address </u></th>
			<th><u> Contact No. </u></th>
			<th><u> Order Status </u></th>
			<th><u> Payment Status </u></th>
		
			<th></th>
			
			<th></th>	
			<th></th>
			
		</thead>
		
		<tbody>
			<?php
				foreach($customer_information as $customer)
				{
					echo "<tr>";
						
						echo "<td>"."</td>";
						echo "<td>"."</td>";
							
							echo "<td>".$customer["customer_id"]."</td>";
							echo "<td>".$customer["customer_name"]."</td>";
							echo "<td>".$customer["customer_address"]."</td>";
							echo "<td>".$customer["email_address"]."</td>";
							echo "<td>".$customer["contact_no"]."</td>";
							echo "<td>".$customer["order_status"]."</td>";
							echo "<td>".$customer["payment_status"]."</td>";
							
						echo "<td>"."</td>";
						
	
							echo '<td><a href="admin_ViewUserInfo.php?customer_id='.$customer["customer_id"].'" class="btn btn-primary">View</a></td>';
							
							echo '<td><a href="admin_EditUser.php?customer_id='.$customer["customer_id"].'" class="btn btn-success">Edit</a></td>';
						
							echo '<td><a href="admin_DeleteUser.php?customer_id='.$customer["customer_id"].'" class="btn btn-danger">Delete</a></td>';

						
					echo "</tr>";
			
				}
			?>
			
		</tbody>
		
	</table>
	
</div>






