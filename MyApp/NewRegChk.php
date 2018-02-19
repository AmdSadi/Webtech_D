<!doctype php>

<?php
	function test_input($data) 
	{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
	}
	if($_SERVER["REQUEST_METHOD"]=="POST");
	{
		if(empty($_POST["Uname"])){
			
			$nameEr="Name Required";
			setcookie("RUflag",1,time() + (86400 * 30), "/");
			header('Location:register.php');
		}
		else
		$name=test_input($_POST["Uname"]);
	    if(empty($_POST["Upass"]))
		{
			$passEr="Pass word Required";
			setcookie("RPflag",1,time() + (86400 * 30), "/");
			header('Location:register.php');
			
			
		}
		else
		$pass=test_input($_POST["Upass"]);
	 
	
		$Person = array($name=>$pass);
		setcookie($name,$pass,time() + (86400 * 30), "/");
		header('Location:MyIndex.php');
		
	}
	

?>