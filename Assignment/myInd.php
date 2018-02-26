<html>
<form name="cgpa" method="POST" action="myInd.php">
CGPA:<input type="text" name="cg" placeholder="0.00"/>

<?php
function test_input($data) 
	{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
	}
	$in=0;
	if($_SERVER["REQUEST_METHOD"]=="POST")
	$in=test_input($_POST["cg"]);
		//setcookie("NCG",1,time() + (86400 * 30), "/");
		
$dom = simplexml_load_file("myXml.xml");

echo $in;

foreach($dom->Student as $s)
{
	if($s->cgpa==$in)
	{
		
	
	echo "<h4>Student Name:</h4>".$s->name.".";
	
	echo "<h4>ID:</h4>".$s->id.".";
	echo "<h4>CGPA:</h4>" .$s->cgpa.".";
	echo "<h4>Course Taken:</h4>";
	$countt=1;
	foreach($s->CourseList->Course as $c){
		echo " ".$countt.".".$c->CName."|Section:".$c->Section."|Grade:".$c->Grade."."."<br>";
		$countt++;
	}
	echo"<br>";
	echo"<hr/>";
	}
}

?>
</html>