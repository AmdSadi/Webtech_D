<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US">
	<head>
		<title>Index Page</title>
		<h1>Login</h1>
		
	</head>
	<body>
		<input type=button onclick="location.href='register.php'" value="Register"/>
		<br>
		<?php setcookie("Uflag",0,time() + (86400 * 30), "/");?>
		<?php setcookie("Pflag",0,time() + (86400 * 30), "/");
		setcookie("nameEr","",time() + (86400 * 30), "/");?>
		<br><form name="loginInput" method="POST" action="Registercheck.php">
		
		User Name:  <input type="text" name="Uname" />
		<br>
		
		PassWord:   <input type ="text" name="Upassword"/>
		<?php

		if($_COOKIE["Uflag"]==1)
		{
			echo "\nNAme field Req";
		}
		if($_COOKIE["Pflag"]==1)
		{
			
			echo "PAssfield Req";
			
		}
		
		?>
		
		
		</br>
		<input type="Submit"/>
		</form>
		
		
	</body>
</html>