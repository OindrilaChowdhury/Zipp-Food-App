<?php 

	include 'Admin_page.php';
	
	require '../controllers/admin_EmployeeController.php';
	
	$employee_information = getAllEmployeeInfo();
	
	
	
?>



				
<div >


<br/>
<br/>




	<script>		
		
		function searchEmployee()
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
				
				http.open("GET","admin_Search_employee.php?sk="+search_word,true);
				http.send();
				
			}
		
		
		</script>

			<div  class="center">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text"  id="search_input" onkeyup="searchEmployee()" placeholder="Search by EMPLOYEE Details" class="form-control" />
				</div>
			</div>
				
			<div id="search_result">
			</div>



	
 	
	<table class="table table-striped">
		<thead>
		
			<th></th>
			<th></th>
			
			<th><u> Employee ID </u></th>
			<th><u> Employee Name </u></th>
			<th><u> Employee Address </u></th>
			<th><u> Email Address </u></th>
			<th><u> Contact No. </u></th>
			<th><u> Employee Position </u></th>
			<th><u> Salary </u></th>
			<th><u> Payment Status </u></th>
		
			<th></th>
			
			<th></th>	
			<th></th>
			
		</thead>
		
		<tbody>
			<?php
				foreach($employee_information as $employee)
				{
					echo "<tr>";
						
						echo "<td>"."</td>";
						echo "<td>"."</td>";
							
							echo "<td>".$employee["employee_id"]."</td>";
							echo "<td>".$employee["employee_name"]."</td>";
							echo "<td>".$employee["employee_address"]."</td>";
							echo "<td>".$employee["email_address"]."</td>";
							echo "<td>".$employee["contact_no"]."</td>";
							echo "<td>".$employee["employee_position"]."</td>";
							echo "<td>".$employee["salary"]."</td>";
							echo "<td>".$employee["payment_status"]."</td>";
							
						echo "<td>"."</td>";
						
	
							echo '<td><a href="admin_ViewEmployeeInfo.php?employee_id='.$employee["employee_id"].'" class="btn btn-primary">View</a></td>';
							
							echo '<td><a href="admin_EditEmployee.php?employee_id='.$employee["employee_id"].'" class="btn btn-success">Edit</a></td>';
						
							echo '<td><a href="admin_DeleteEmployee.php?employee_id='.$employee["employee_id"].'" class="btn btn-danger">Delete</a></td>';

						
					echo "</tr>";
			
				}
			?>
			
		</tbody>
		
	</table>
	
</div>

<br/>
<br/>
<br/>
<br/>





