<?php include('dbcon.php'); ?>

<?php 

	if(isset($_GET['id'])){
		$id =$_GET['id'];
	}

	$query = "delete from price where ID = '$id'";

	$result = mysqli_query($connection, $query);

	if(!$result){

		die("Query Failed".mysqli_error($connection));

	}
	else{
		header('location:services.php?delete_msg=Selected services has been deleted');
	}

 ?>