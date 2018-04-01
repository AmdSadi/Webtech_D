<?php
session_start();
?>
<?php
	$flag=1;
	function test_input($data) 
	{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
	}
	include("config.php");
	$name=test_input($_POST["U_name"]);
	$pass=test_input($_POST["U_pass"]);
	$pass=md5($pass);
	$sql = "SELECT * FROM user where Username='$name' and Password='$pass'"; 
	$rs_result = mysqli_query ($conn,$sql);
	$totalres=mysqli_num_rows($rs_result);
	echo $totalres;
	$flag=1;
	if($totalres==1)
	{
		     $flag=0;
		     $_SESSION["USER"]=$name;
			header('Location:Welcome.php');
	}
	$sql = "SELECT * FROM admin where Username='$name' and Password='$pass'"; 
	$rs_result = mysqli_query ($conn,$sql);
	$totalres=mysqli_num_rows($rs_result);
	echo $totalres;
	$flag=1;
	if($totalres==1)
	{
		     $flag=0;
		     $_SESSION["USER"]=$name;
			header('Location:Welcome.php');
	}
	if($flag==1)
	{
		setcookie("loginerr","1",time() + (86400 * 30), "/");
		//header('Location:Index.php');

	}

?>