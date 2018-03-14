<!doctype html>
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
                     <td>Name:</td>
                     <td><input type="text" name="U_name" required/></td>
                   </tr>
                   <tr>
                     <td>ID:</td>
                     <td><input type="text" name="U_id" required/></td>
                   </tr>
                   <tr>
                     <td>Password:</td>
                     <td><input type="password" name="U_pass" required/></td>
                   </tr>
                   <tr>
                	<td>Type of User:</td> 
                </tr>
                <tr>
                <td><input type = "radio" name="U_type" value="teacher" checked> Teacher </td>
                <td><input type = "radio" name="U_type" value="student" > Student </td>
            	</tr>
                   <tr>
                    <td colspan="2" align="right"><input type="submit" value="Submit"/></td>
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