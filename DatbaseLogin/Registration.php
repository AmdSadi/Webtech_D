<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>Registration Page</title>
	</head>
	<body>
		<e1>Register Here</e1>
    <?php
    setcookie("Duplicate","1",time()+(86400*30),"/");
    ?>
		<form name="Register" method="post" action="AddUser.php">

                <table border="0" cellpadding="5" >
                   <tr>
                     <td>Username:</td>
                     <td><input type="text" name="U_name" required/></td>
                   </tr>
                   <tr>
                     <td>Email:</td>
                     <td><input type="text" name="U_email" required/></td>
                   </tr>
                   <tr>
                     <td>Password:</td>
                     <td><input type="password" name="U_pass" required/></td>
                   </tr>

                   <tr>
                	<td>Type of User:</td> 
                </tr>
                <tr>
                <td><input type = "radio" name="U_type" value="admin" checked> ADMIN </td>
                <td><input type = "radio" name="U_type" value="user" > USER </td>
            	</tr>
                   <tr>
                     <td colspan="2" align="left"><input type=button onClick="location.href='Index.php'" value='Home'></td>
                    <td colspan="2" align="right"><input type="submit" value="Done"/></td>
                   </tr>


                </table>
               <?php
               if($_COOKIE["Duplicate"]=="0")
               {
                     echo"Duplicate ID";
               }
               ?>
	</body>
</html>