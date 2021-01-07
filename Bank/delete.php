<?php
include("connection.php");
$ano=$_GET['ano'];
$query="delete from accounts where account_no='$ano'";
$data=mysqli_query($conn,$query);
if($data)
{
    header('location:show.php');
}
else
{
    echo "Not Deleted";
}

?>