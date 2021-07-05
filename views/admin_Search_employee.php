<?php
	
	$s = "localhost";
	$u = "root";
	$p = "";
	$d = "restaurant_database";
	
	$conn = mysqli_connect($s,$u,$p,$d);

if(isset($_GET["sk"]))
{	
	$key = mysqli_real_escape_string($conn,$_GET["sk"]);
	$query="
			SELECT * FROM employee_information 
			WHERE employee_name LIKE '%$key%'
			OR employee_id LIKE '%$key%' 
			OR employee_address LIKE '%$key%' 
			OR email_address LIKE '%$key%' 
			OR contact_no LIKE '%$key%'
			OR employee_position LIKE '%$key%'
	
			";
}
else{
		
		 echo  "<h3><u><i> write Search key words...  </i></u></h3>";
	}
	
	
	

	
	$result = mysqli_query($conn,$query) ;

?>



<div>


	<table class="table table-striped" >
	
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
			
				if(mysqli_num_rows($result) > 0)
				{
			
					while($row = mysqli_fetch_array($result))
						{
							echo "<tr>";
						
								echo "<td>"."</td>";
								echo "<td>"."</td>";
									
									echo "<td>".$row["employee_id"]."</td>";
									echo "<td>".$row["employee_name"]."</td>";
									echo "<td>".$row["employee_address"]."</td>";
									echo "<td>".$row["email_address"]."</td>";
									echo "<td>".$row["contact_no"]."</td>";
									echo "<td>".$row["employee_position"]."</td>";
									echo "<td>".$row["salary"]."</td>";
									echo "<td>".$row["payment_status"]."</td>";
									
								echo "<td>"."</td>";
								
			
									echo '<td><a href="admin_ViewEmployeeInfo.php?employee_id='.$row["employee_id"].'" class="btn btn-primary">View</a></td>';
									
									echo '<td><a href="admin_EditEmployee.php?employee_id='.$row["employee_id"].'" class="btn btn-success">Edit</a></td>';
								
									echo '<td><a href="admin_DeleteEmployee.php?employee_id='.$row["employee_id"].'" class="btn btn-danger">Delete</a></td>';

								
							echo "</tr>";
					
								}
								
						}


				else
					{
						 echo "<h3><u><i> ........ Search Data Not Found ........ </i></u></h3>" ;
					}
						
						
						
			?>
					
				</tbody>
				
			</table>
			
</div>
