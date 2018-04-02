<?php
session_start();
ob_start();

if (!(isset($_SESSION['un']))){
header("location:index.php");
}
else {
?>
<?php
include("config.php");
    //connect_db();
//getting id of the data from url
    $id = $_GET['id'];
	echo $id;
	$_SESSION['foredit']=$id;
	echo $_SESSION['foredit'];
	$sql = "SELECT * FROM info where id='$id'";  
	$rs_result = mysqli_query($conn,$sql);
	if($rs_result)
	{
		echo "YEs";
	}
	$rs=mysqli_fetch_array($rs_result);
	
	 echo $rs['tour_detail'];
	
?>
<html>
<head>
	<title>Edit Tracking info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">

  	<script src="js/bootstrap.min.js"></script>
</head>

<body class="container">
<br>
	<a href="admin.php"><span class="btn btn-primary">Dashboard</span></a>
	<a href="search.php?search="><span class="btn btn-success">Search</span></a>
	<a href="logout.php"><span class="btn btn-warning">Logout</span></a>
	<br/><br/>
    <center><h1>Edit Tracking Information</h1></center><hr>

	<form action="Edit_action.php" method="post" name="form1" enctype="multipart/form-data">
		
        <div class="input-group">
      		<span class="input-group-addon">Tour Detail</span>
      		<input id="tour_detail" type="text" class="form-control" name="tour_detail" value="<?php echo $rs['tour_detail'];?>" >
    	</div>
        	<div class="input-group">
      		<span class="input-group-addon">Operator Name</span>
      		<input id="operator_name" type="text" class="form-control" name="operator_name" value="<?php echo $rs['operator_name'];?>">
    	</div>
        <div class="input-group">
      		<span class="input-group-addon">Money IN</span>
      		<input id="money_in" type="double" class="form-control" name="money_in" value="<?php echo $rs['money_in'];?>" required>
    	</div>
         <div class="input-group">
      		<span class="input-group-addon">Money OUT</span>
      		<input id="money_out" type="double" class="form-control" name="money_out" value="<?php echo $rs['money_out'];?>" required>
    	</div>
        <div class="input-group">
      		<span class="input-group-addon">File Upload</span>
      		<input id="file_link" type="file" class="form-control" name="file_link" placeholder="Click Here to upload the pdf/png/jpeg/jpg file">
    	</div>
         <div class="input-group">
      		<span class="input-group-addon">Remarks</span>
      		<input id="remarks" type="text" class="form-control" name="remarks" value="<?php echo $rs['remarks'];?>">
    	</div>
        
        <input type="submit" name="Submit" value="Save Information" class="btn btn-success btn-block btn-lg">
        
        <input type="reset" name="reset" value="Clear Information" class="btn btn-danger  btn-block btn-lg">
        
        
        
        
      
	</form>
    <?php
    }
    ?>
</body>
</html>

