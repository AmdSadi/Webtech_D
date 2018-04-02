<?php

$conn= mysqli_connect('172.16.105.200','webtech','webtech','world');

//Write at least 2 functions for open and close connection to database.
	$sql = "SELECT * FROM country";  
	$rs_result = mysqli_query($conn,$sql);
	if($rs_result)
	{
		echo"Yes";
	}
	else
		echo"No";
	
		echo '<select name="Country">'; 
				while($rs=mysqli_fetch_array($rs_result))
				{
					echo '<option>'.$rs['Code']. '</option>';
				
				}
				echo'</select>';



?>
