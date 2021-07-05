

<html>

	<head></head>
	<title>Add Order</title>

	<body>

	<?php
		$err_name="";
		$name="";
		$err_phn="";
		$phn="";
		$err_adress="";
		$adress="";
		if(isset($_POST['submit']))
		{
			
			if(empty($_POST['name']))
			{
				$err_name="*Name Required";
			}
			else
			{			
				$name=htmlspecialchars($_POST['name']);
				echo $name;
			}
			if (empty($_POST['phn']))
			{
				$err_phn="*Phone number Required";
			}
			else
			{
				$phn=$_POST['phn'];
			}
			if (empty($_POST['adress']))
			{
				$err_adress="*Adress Required";
			}
			else
			{
				$adress=$_POST['adress'];
			}
		}
	?>
	<h1>Add Order</h1>
	
	
	<hr><br>
		<form method="post" action="">
			<table>
				<tr>
					<td>Food Name:</td>
					<td><input type="text" value="<?php echo $name;?>" name="name">
					<br><span style="color:red"><?php echo $err_name;?></span><font size="-1">Food Name</font></td> 
								
				</tr>
				
				<tr>
					<td>Amount :</td>
					<td> <input type="Phone Number" size ="8" name="phn" value="<?php echo $phn;?>">
					<br><span style="color:red"><?php echo $err_phn;?></span></span><font size="-1">Sub Amount</font></td>
					<td> <input type="Phone Number" size ="15" name="phn" value="<?php echo $phn;?>">
					<br><span style="color:red"><?php echo $err_phn;?></span></span><font size="-1">Total Amount</font></td>
					
				</tr>
				<tr>
					<td>Adress: </td>
					<td><input type="text"  name="adress" value="<?php echo $adress;?>">
				</tr>
				<tr>
					<td></td>
					<td><input type="text"  name="adress" value="<?php echo $adress;?>">
					
				</tr>
				
				
				
				
				<tr>
					<td>Order Date :</td>
					<td>
						<select name="Month">
							<option selected="selected"><h3>Month</h3></option>
							<option>January</option>
							<option>February</option>
						</select>
					</td>
					<td>
						<select name="Day">
							<option selected="selected"> Day </option>
							
							
						</select>
					</td>
					<td>
						<select name="Year">
							<option selected="selected">Year</option>
							
				
						</select>
					</td>
				</tr>
				
				<tr>
					<td>Where did you hear about us?:</td>
					<td><input type="checkbox" name="Where did you hear about us?[]" value="A friend or colleauge"> A friend or colleague<br><input type="checkbox" name="Where did you hear about us?[]" value="Google"> Google <br><input type="checkbox" name="Where did you hear about us?[]" value="Blog Post">Blog post<br>
					<input type="checkbox" name="Where did you hear about us?[]" value="News Article">News Article</td>
				</tr>
				
				 <tr>
							 <td> </td>
							 <td colspan="3"><h2><b><center><input type="button"value="SUBMIT"></center></b></h2></td>
							 <td> </td>
							 </tr>
					
				
				
				
				
				
				
				
			</table>
		</form>
	</body>
</html>
