<?php
session_start();
?>
<?php
	$flag=1;
	function test_input($data) 
	{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
	}
	$id=test_input($_POST["U_id"]);
	$pass=test_input($_POST["U_pass"]);
	$dom = simplexml_load_file("studentlist.xml");
	foreach($dom->Student as $s)
	{
		if($s->ID==$id)
		{
			if($s->Password==$pass)
			{
				$flag=0;
				echo "Succesfull ";
				$_SESSION["type"] = "student";
				$_SESSION["id"] =$id;


				header('Location:Student.php');
			}
			else
			{
				setcookie("loginerr","1",time() + (86400 * 30), "/");
				header('Location:Index.php');
				break;
			}
		}
	}
	$dom = simplexml_load_file("teacherlist.xml");
	foreach($dom->Teacher as $s)
	{
		if($s->ID==$id)
		{
			if($s->Password==$pass)
			{
				$flag=0;
				echo "Succesfull ";
				$_SESSION["type"] = "teacher";
				$_SESSION["id"] =$id;

				header('Location:Teacher.php');
			}
			else
			{
				setcookie("loginerr","1",time() + (86400 * 30), "/");
				header('Location:Index.php');
			}
		}
	}
	if($flag==1)
	{
		setcookie("loginerr","1",time() + (86400 * 30), "/");
		header('Location:Index.php');

	}

?>