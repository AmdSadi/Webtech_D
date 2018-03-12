<!doctype html>
<html>
<?php
	function test_input($data) 
	{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
	}
	$name=test_input($_POST["U_name"]);
	$id=test_input($_POST["U_id"]);
	$pass=test_input($_POST["U_pass"]);
	$type=test_input($_POST["U_type"]);
	if($type=="student"){
	$xml= new DOMDocument("1.0","UTF-8");
	$xml->load('studentlist.xml');
	$rootTag=$xml->getElementsByTagName("Studentlist")->item(0);
	$studentTag=$xml->createElement("Student");
	$nameTag=$xml->createElement("Name",$name);
	$idTag=$xml->createElement("ID",$id);
	$passTag=$xml->createElement("Password",$pass);
	$studentTag->appendChild($nameTag);
	$studentTag->appendChild($idTag);
	$studentTag->appendChild($passTag);
	$rootTag->appendChild($studentTag);
	$xml->save('studentlist.xml');
	}
	else
	{
		$xml= new DOMDocument("1.0","UTF-8");
	$xml->load('teacherlist.xml');
	$rootTag=$xml->getElementsByTagName("Teacherlist")->item(0);
	$studentTag=$xml->createElement("Teacher");
	$nameTag=$xml->createElement("Name",$name);
	$idTag=$xml->createElement("ID",$id);
	$passTag=$xml->createElement("Password",$pass);
	$studentTag->appendChild($nameTag);
	$studentTag->appendChild($idTag);
	$studentTag->appendChild($passTag);
	$rootTag->appendChild($studentTag);
	$xml->save('teacherlist.xml');

	}
	header('Location:Index.php');



?>
</html>