<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>Login Page </title>
		<e1>Login </e1>
		<br>
	</head>

	<body>
		<?php
			/*if(isset($_SESSION["type"]))
			{
				if($_SESSION["type"]=="student")header('Location:Student.php');
				else if($_SESSION["type"]=="teacher")header('Location:Teacher.php');

			}*/
		?>
		<form name="Login" method="post" action="Chklogin.php">

                <table border="0" cellpadding="5" >
                   <tr>
                     <td>UserName:</td>
                     <td><input type="text" name="U_name" required/></td>
                   </tr>
                   <tr>
                     <td>Password:</td>
                     <td><input type="password" name="U_pass" required/></td>
                   </tr>
                   <tr>
                    <td colspan="2" align="right"><input type="submit" value="Submit"/></td>
                   </tr>

                </table>
                <br/>
                 <?php
			        if(isset($_COOKIE["loginerr"]))
			        {
			        	echo"Invalid";
			        	setcookie("loginerr","",time() - (86400 * 30), "/");
			        }
       			 ?>
                &nbsp &nbsp &nbsp &nbsp New User? &nbsp &nbsp <input type=button onClick="location.href='Registration.php'" value='Register' ><br/>

        </form>




	</body>
</html>