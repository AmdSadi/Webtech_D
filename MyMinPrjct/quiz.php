<?php
session_start()?>
<!doctype html>

<html>
<head><title>QUIZ</title></head>
	<body>

		<form name="Quizsel" method="POST" action="quiz.php">
			<?php
			if($_SESSION["type"]!="student")header('Location:Index.php');
				$sub=array();
				$countt=0;
				$dom=simplexml_load_file("Quizlist.xml");
				echo '<select name="Sub">'; 
				foreach($dom->Quiz as $s)
				{
					echo '<option>'.$s->Subject. '</option>';

				}
				echo'</select>'


			?>
			<br>
			<input type="submit" />
			&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp <input type=button onClick="location.href='logout.php'" value='logout' ><br/>

		</form>
	</body>
</html>
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
	foreach($dom->Quiz as $s)
	{
		if($s->Subject==$q)
		foreach($s->ques as $ss){
		echo $ss->name;
		echo"<br>";
		echo  '<form action="page.php" method="post">
            <input type="radio" name="ans" value="'.$ss->option1.'"checked >'.$ss->option1.'<br>
            <input type="radio" name="ans" value="'.$ss->option2.'">'.$ss->option2.'<br>
            <input type="radio" name="ans" value="'.$ss->option3.'">'.$ss->option3.'<br>
            
        </form>';
        echo"<br>";
    }
	}
?>