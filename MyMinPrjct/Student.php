<?php
session_start()?>
<!doctype html>
<html>
	<head>
		<title>Student Page</title>
		<e1>Student Page</e1>
	</head>
	<body>
		<?php if($_SESSION["type"]!="student")header('Location:Index.php'); ?>
		<br>
		<a href="quiz.php">Quiz</a>&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp <input type=button onClick="location.href='logout.php'" value='logout' ><br/>
		<br>
		<a href="quiz.php">Result<a>


	</body>
</html>