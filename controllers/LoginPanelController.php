<?php



				//database connection for login panel
//**************************************************************************************
		$host ="localhost";
		$name="root";
		$pass="";
		$dbname="restaurant_database";
		$con = mysqli_connect($host,$name,$pass) or die ('Unable to connect Database');
		mysqli_select_db($con,$dbname);
//**************************************************************************************



				//log in validation check
//**************************************************************************************	
    if(isset($_POST['login']))
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		
//*******************************************************************
		$query  = "SELECT * FROM `login_panel` WHERE  user_name='$user_name' AND password='$password'" ;
		
		
			
		$result= mysqli_query($con,$query);
		
		
	if($result)
		{
			if(mysqli_num_rows($result) > 0 )
			{
				
				while($row = mysqli_fetch_assoc($result))
					{	
						if($row["title"] == "admin")
						{
							$_SESSION["LoginUser"] = $row["user_name"];
							
							header('Location: Admin_page.php');
							
							echo"
							<script>
							alert('You are Successfully Logged in');
							window.location.href='../views/Admin_page.php';
							</script>
							";
						
						}
						
						elseif($row["title"] == "employee")
						{
							$_SESSION["LoginUser"] = $row["user_name"];
							
						  // header('Location: ../views/Delivery_man.php');
							
							echo"
							<script>
							alert('You are Successfully  Logged in');
							window.location.href='../views/Delivery_man.php';
							</script>
							";
							
						}
						
						elseif($row["title"] == "customer")
						{
							$_SESSION["LoginUser"] = $row["user_name"];
						
							setcookie("LoginUser" , $row["user_name"] , time()+180);
							
							header('Location: ../views/customer_search_food.php');
						
							echo"
							<script>
							alert('You are Successfully  Logged in');
							window.location.href='../views/customer_search_food.php';
							</script>
							";
						}
						
						else
						{
							echo"
							<script>
							alert(' Invalid User ');
							window.location.href='views/logon.php';
							</script>
							";
						
						}
						
					}
					
			}
			
			else
			{
				
				echo"
				<script>
				alert(' UserName or Password Invalid ');
				window.location.href('views/logon.php');
				</script>
				";
			}
			
			
		}
		else
			{
			
			
				echo"
				<script>
				alert('Database Error  ');
				window.location.href('views/logon.php');
				</script>
				";
			}
		
		
		
	}
	

	else
	{
	}
//***************************************************************************************************************
?>

</div>


