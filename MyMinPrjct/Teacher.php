<?php
session_start()?>
<!doctype html>
<html>
	<head>
		<title>Teacher Page</title>
		<e1>Teacher Page</e1>
	</head>
	<body>
		<?php if($_SESSION["type"]!="teacher")header('Location:Index.php'); ?>
		<br>
		<a href="upload.php">QUIZ Update</a>
		&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp <input type=button onClick="location.href='logout.php'" value='logout' ><br/>
		<br>


	</body>
</html>