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
		<p>MY QUIZZES</p>

		<form name="Quizsel1" method="POST" action="">
			<?php
			if($_SESSION["type"]!="teacher")header('Location:Index.php');
				$sub=array();
				$countt=0;
				$dom1=simplexml_load_file("Quizlist.xml");
				foreach($dom1->Quiz as $s)
				{
					$str=(string)$s->Subject;
					$sub[$str]=0;
					//if($s->T_ID)

				}

				$dom=simplexml_load_file("Quizlist.xml");
				echo '<select name="Sub">'; 
				foreach($dom->Quiz as $s)
				{
					$str=(string)$s->Subject;
					if($sub[$str]==0 && $s->T_ID == $_SESSION["id"])
					echo '<option>'.$s->Subject. '</option>';

					$sub[$str]=1;

				}
				echo'</select>';


			?>
			<br>
			<input type="submit" />

			<?php
	function test_input($data) 
	{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
	}
	$q="";
	 if (isset($_POST['Sub'])) {
	 	//echo "sucs";
	 	//echo $_POST['Sub'];
	 
	$q=test_input($_POST['Sub']);
	}

	$dom=simplexml_load_file("Quizlist.xml");
	
	echo"<br>";
	$cnt=1;
	foreach($dom->Quiz as $s)
	{
		if($s->Subject==$q)
		foreach($s->ques as $ss){
			//$n=$w.$c;
			echo $cnt++;
		echo ".".$ss->name;
		echo "<br>";
		echo "a.".$ss->option1;
		echo "<br>";
		echo "b.".$ss->option2;
		echo "<br>";
		echo "c.".$ss->option3;
		echo "<br>";
		echo "# ANS:".$ss->ans;
		echo "<br>";		
		echo "<br>";
		echo "<br>";
           
       
    }
	}
	

?>
	<br>
	<P>Student List: </P>
	&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp <input type=button onClick="location.href='teachstu.php'" value='StudentList' ><br/>
		

	</body>
</html>