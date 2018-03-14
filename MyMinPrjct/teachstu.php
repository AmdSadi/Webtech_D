<?php
session_start()?>
<html>
<head>
<input type=button onClick="location.href='Student.php'" value='Home' >
&nbsp &nbsp Student: 
 &nbsp &nbsp <input type=button onClick="location.href='logout.php'" value='logout' ><br/></head>
 <body>
<form name="Stu1" method="POST" action="teachstu.php">
			<?php
			if($_SESSION["type"]!="teacher")header('Location:Index.php');

				$dom=simplexml_load_file("studentlist.xml");
				echo '<select name="Stu">'; 
				foreach($dom->Student as $s)
				{
					echo '<option>'.$s->ID.'</option>';


				}
				echo'</select>';


			?>
			<br>
			<input type="submit" />
		</form>

<?php
	if($_SESSION["type"]!="teacher")header('Location:Index.php');
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
				function test_input($data) 
				{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
				}
				$selStu="my";
				 if (isset($_POST['Stu'])) {
				 	//echo "sucs";
				 	//echo $_POST['Sub'];
				 
				$selStu=test_input($_POST['Stu']);
				}

				echo $selStu;
				$xml= new DOMDocument("1.0","UTF-8");
				$xml->load('t_stu.xml');
				$rootTag=$xml->getElementsByTagName("T_StudentList")->item(0);
				$t_stuTag=$xml->createElement("T_STU");
				$stu_idTag=$xml->createElement("STU_ID",$selStu);
				$t_idTag=$xml->createElement("T_ID",$_SESSION["id"]);
				$t_stuTag->appendChild($stu_idTag);
				$t_stuTag->appendChild($t_idTag);
				$rootTag->appendChild($t_stuTag);
				$xml->save('t_stu.xml');
	}
?>
<?body>
</html>