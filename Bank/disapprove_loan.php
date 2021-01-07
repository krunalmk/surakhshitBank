<?php
	include('connection.php');
	$l_id=$_GET['loan_id'];
	$query3="update loan set status='Disapprove' where loan_id='$l_id'";
	$data3=mysqli_query($conn,$query3);
	if($data3)
	{
		header('location:employee.php');
	}
	else
	{
		echo "Error";
	}

?>