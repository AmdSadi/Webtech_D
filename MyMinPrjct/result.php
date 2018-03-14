<?php

session_start()?>
<?php
if($_SESSION["type"]=="student"){

function test_input($data) 
	{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
	}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	//echo "ei page".$_COOKIE["total"];
	$c="1";
	$w="ans";
	$n=$w.$c;
    $countt=0;
    for($i=1;$i<=$_COOKIE["total"];$i++)
    {
    	//echo $n;
    	if(isset($_POST[$n])){
    	$temp=test_input($_POST[$n]);
    	//echo $temp;
    	echo"<br>";
    	if($temp==$_COOKIE[$n])
    	{
    		$countt++;
    	}
    	
    	}
    	$n++;
	}
	
	echo "Correct".$countt."of".$_COOKIE["total"];
	echo"<br>";
	//echo '<input type="submit" />
		// <input type=button onClick="location.href='Student.php'" value='Home' ><br/>';


}
}
else
{
	header('location:Index.php');

}
?>
<input type=button onClick="location.href='Student.php'" value='Home' >
&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp <input type=button onClick="location.href='logout.php'" value='logout' ><br/>

