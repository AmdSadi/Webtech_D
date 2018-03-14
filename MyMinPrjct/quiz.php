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
				$dom1=simplexml_load_file("Quizlist.xml");
				foreach($dom1->Quiz as $s)
				{
					$str=(string)$s->Subject;
					$sub[$str]=0;

				}
				//$chk=simplexml_load_file("Quizlist.xml");
				/*$chk=simplexml_load_file("t_stu.xml");
				foreach($chk->T_STU as $tt)
						{
							echo $tt->STU_ID;
							echo"<br>";
							echo $tt->T_ID;
							echo"<br>";
						}*/

				$dom=simplexml_load_file("Quizlist.xml");
				echo '<select name="Sub">'; 
				foreach($dom->Quiz as $s)
				{
					$str=(string)$s->Subject;
					if($sub[$str]==0){
						$flag=0;
						$chk=simplexml_load_file("t_stu.xml");
						foreach($chk->T_STU as $tt)
						{
							

							if($tt->STU_ID==$_SESSION["id"])
							{
								//echo " ekhne";
								$tmp1=test_input($tt->T_ID);
								$tmp2=test_input($s->T_ID);
								/*echo $tmp1;
								echo "<br>";
								echo $tmp2;
								echo"<br>";*/
								if($tmp1==$tmp2)
								{
									//echo"ekhane";
									$flag=1;
								/*	echo $tt->STU_ID;
							echo"<br>";
							echo $tt->T_ID;
							echo"<br>";
							echo $s->T_ID;
							echo"<br>";*/
								}
							}

						}
						if($flag=1){
					echo '<option>'.$s->Subject. '</option>';
				}
				}

					$sub[$str]=1;

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
	$c="1";
	$w="ans";
	$n=$w.$c;
	$total=0;
	
	 foreach($dom->Quiz as $s)
	{
		if($s->Subject==$q)
		foreach($s->ques as $ss){
			//$n=$w.$c;
		echo $ss->name;
		echo"<br>";
		 echo '<form action="" method="post">
            <input form="myForm" type="radio" name="'.$n.'" value="'.$ss->option1.'" checked >'.$ss->option1.'<br>
            <input form="myForm" type="radio" name="'.$n.'" value="'.$ss->option2.'" >'.$ss->option2.'<br>
            <input form="myForm" type="radio" name="'.$n.'" value="'.$ss->option3.'">'.$ss->option3.'<br>
            </form>';
           
        setcookie($n,$ss->ans,time()+(86400*30),"/");
        $n++;
        $total++;
        echo"<br>";
    }
	}
	setcookie("total",$total,time()+(86400*30),"/");
	 echo $_COOKIE["total"]=$total;
	echo'<form id="myForm" method="post" action="result.php">
                  <input type="submit" value="Submit">
              </form>';


         

	/*$temp=$_POST['ans1'];



    	if($temp==$_SESSION['ans1'])
    	{
    		$countt++;
    	}

    $temp=$_POST["ans2"];



    	if($temp==$_SESSION["ans2"])
    	{
    		$countt++;
    	}*/
	

?>