<?php
session_start();
ob_start();

if (!(isset($_SESSION['un']))){
header("location:index.php");
}
else {
//including the database connection file
	require_once("config.php");
	//connect to db
	if (isset($_POST['Submit'])) {
		$id=$_SESSION['foredit'];
		echo $id;
		
		//$booking_id = $_POST['booking_id'];
		$tour_detail = $_POST['tour_detail'];
		$operator_name = $_POST['operator_name'];
		$money_in = $_POST['money_in'];
		$money_out = $_POST['money_out'];
		$remarks = $_POST['remarks'];
		$flag=0;
		

			if(!$_FILES['file_link']['name']){
				echo "<br/>Please upload a document";
				echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
				
				}
				
			else{
			$info = pathinfo($_FILES['file_link']['name']);
			$ext = $info['extension']; // get the extension of the file
			$newname = $booking_id.".".$ext; 

			$target = 'docs/'.$newname;
			move_uploaded_file( $_FILES['file_link']['tmp_name'], $target);
			//Edit data to database
			
			//$result = mysqli_query($conn,"Update INTO info (booking_id,tour_detail,operator_name,money_in,money_out,file_link,remarks) VALUES ('$booking_id','$tour_detail','$operator_name','$money_in','$money_out','$target','$remarks')");
			$result = mysqli_query($conn,"Update info SET tour_detail='$tour_detail',
															operator_name='$operator_name',
															money_in='$money_in',
															money_out='$money_out',
															file_link='$target',
															remarks='$remarks'
															where id='$id';");
															
			if($result)
				echo "yooo";
			else
				echo"No";
			
			//display success message
			//echo "<font color='green'>Data added successfully.";
			//echo "<br/><a href='admin.php'>View Result</a>||<a href='add.php'>Add New Data</a>||<a href='borrow.php'>View Current Borrow List</a>||<a href='borrowhistory.php'>View Borrow History</a>||<a href='logout.php'>Logout</a>";
			//$flag=1;
			//$_REQUEST[$flag];

			//echo $booking_id.$tour_detail.$money_in.$remarks;

			header("location:admin.php");
			}
			
		
	}

	//close db connection
}

?>

