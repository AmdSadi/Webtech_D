<!doctype php>

<?php
$nameEr="";
	function test_input($data) 
	{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
	}
	if($_SERVER["REQUEST_METHOD"]=="POST");
	{
		//setcookie("Pflag",0,time() + (86400 * 30), "/");
		if(empty($_POST["Uname"])){
			
			
			setcookie("Uflag",1,time() + (86400 * 30), "/");
			header('Location:Myindex.php');
		}
		else
		$name=test_input($_POST["Uname"]);
	
	    if(empty($_POST["Upassword"]))
		{
			$passEr="Pass word Required";
			setcookie("Pflag",1,time() + (86400 * 30), "/");
			header('Location:Myindex.php');
			
			
		}
		else
		$pass=test_input($_POST["Upassword"]);
		
		if($_COOKIE[$name]==$pass)
		{
			 echo "valid";
			//setcookie("nameEr","Succesful",time() + (86400 * 30), "/");
			
		}
		else{
			setcookie("nameEr","Invalid",time() + (86400 * 30), "/");
			header('Location:Myindex.php');
		}
		
	}
	

?>