<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html lang="en-US">
  
     <head>
	     <title> Register_Page </title>
		 <h1 align="center"><u> Register </u></h1>
		 <hr/>
	 </head>
  
     <body>
		<?php setcookie("RUflag",0,time() + (86400 * 30), "/");?>
		<?php setcookie("RPflag",0,time() + (86400 * 30), "/");?>
	 
	     <br>
		 <form name="Register" method="POST" action="NewRegChk.php">
		 <b> User Name: </b>
		 &nbsp &nbsp 
		 <input type="text" name="Uname" size="50"/>
		 <br><br>
		 <b> Password: </b>
		 &nbsp &nbsp &nbsp
		 <input type="text" name="Upass" size="50"/>
		 <br><br>
		 
		<input type="Submit"/>
		</form>
		<?php
		if($_COOKIE["RUflag"]==1)
		{
			echo "NAme field Req";
		}
		if($_COOKIE["RPflag"]==1)
		{
			
			echo " PAssfield Req";
			
		}
		
		?>
		
		 
		 
	 
	 </body>
  
  
  </html>