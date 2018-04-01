<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php
    include("config.php");
     setcookie("Duplicate","1",time()+(86400*30),"/");
	function test_input($data) 
	{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
	}

	$name=test_input($_POST["U_name"]);
	$email=test_input($_POST["U_email"]);
	$pass=test_input($_POST["U_pass"]);
	$type=test_input($_POST["U_type"]);
	$sql = "SELECT * FROM admin where Username='$name'"; 
	$rs_result = mysqli_query ($conn,$sql);
	$totalres=mysqli_num_rows($rs_result);
	echo $totalres;
	$flag=1;
	if($totalres>0)
	{
		$flag=0;
			setcookie("Duplicate","0",time()+(86400*30),"/");
			//header('Location:Registration.php');
	}

	$sql = "SELECT * FROM user where Username='$name'"; 
	$rs_result = mysqli_query ($conn,$sql);
	$totalres=mysqli_num_rows($rs_result);
	echo $totalres;
	if($totalres>0)
	{
		     $flag=0;
			setcookie("Duplicate","0",time()+(86400*30),"/");
			//header('Location:Registration.php');
	}

   echo $flag;
	if($flag==1 && $type=="user"){

		$q=mysqli_query($conn,"INSERT INTO User(Username,Email,Password) VALUES('$name','$email' ,md5('$pass'))")
			or die("Could not execute the insert query.");

		if($q)
			echo "Yoo";
		else
			echo "no";
		header('Location:Index.php');
	}
	else if($flag==1 && $type=="admin")
	{
		mysqli_query($conn,"INSERT INTO Admin(Username,Email,Password) VALUES('$name','$email' ,md5('$pass'))")
			or die("Could not execute the insert query.");
			header('Location:Index.php');
	}
	
	


?>
</html>