<?php
session_start()?>
<!doctype html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	echo "Hello ";
	echo $_SESSION["USER"];
	echo "<br>";
?>
<input type=button onClick="location.href='logout.php'" value='logout' ><br/>