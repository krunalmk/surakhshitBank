<?php

include('connection.php');

?>

<html>
<head>
	<title>Employee</title>
</head>
<body>
<form method='POST'>
<table align='center' cellpadding=6px width=390px>
	<tr>
        <td>Name*</td>
        <td><input type="text" name="na"></td>
    </tr>
    <tr>
        <td>User Name*</td>
        <td><input type="text" name="user"></td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td>Password*</td>
        <td><input type="password" name="pass"></td>
    </tr>
    <tr><td></td></tr>

    <tr>
        <td>Email*</td>
        <td><input type="email" name="em"></td>
    </tr>

    <tr>
        <td>Contact*</td>
        <td><input type="text" name="cont"></td>
    </tr>
</table><br><br>
<center><input type='submit' value='Submit' id='sub' name='subm'></center>
</form>



</body>
</html>

<?php



if(isset($_POST['subm']))
{
	$n=$_POST['na'];
	$un=$_POST['user'];
	$pwd=$_POST['pass'];
	$em=$_POST['em'];
	$cnt=$_POST['cont'];
	//echo $em;
	$query="insert into employee values ('$n','$un','$pwd','$em','$cnt')";
	$data=mysqli_query($conn,$query); 
	if($data)
	{
		echo "Data inserted";
		header('location:e_login.php');
	}
	else
	{
		echo "Data not inserted";
	}
}




?>