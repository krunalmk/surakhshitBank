<?php
include("connection.php");
error_reporting(0);
?>

<html>
    <head>
        <title>Show Details</title>
</head>
<style>
    body
    {
        background-color: rgb(241, 240, 255);
    }
    #del
    {
        background-color:red;
        color:white;
        border:none;
        border-radius:5px;
        height:23px;
    }
    table
    {
        background-color:white;
    }
</style>
<body>
<br>
<h1 align='center'>Account Details</h1>
<table align='center' border='3px'>
    <tr>
        <td align='center'>Photo</td>
        <td align='center'>Customer Id</td>
        <td align='center'>Account No.</td>
        <td align='center'>Balance</td>
        <td align='center'>First Name</td>
        <td align='center'>Last Name</td>
        <td align='center'>Contact No</td>
        <td align='center'>Email Id</td>
        <td align='center'>DOB</td>
        <td align='center'>Delete</td>

<?php

$query="select * from accounts";
$data=mysqli_query($conn,$query);
$tot=mysqli_num_rows($data);
if($tot!=0)
{
    while($result=mysqli_fetch_assoc($data))
    {
    ?>
        <tr>
            <td align='center'><?php echo "<img src='".$result[photo]."'height='50' width='50'>";?>
            <td align='center'><?php echo $result['customer_id'];?></td>
            <td align='center'><?php echo $result['account_no'];?></td>
            <td align='center'><?php echo $result['amount'];?></td>
            <td align='center'><?php echo $result['firstname'];?></td>
            <td align='center'><?php echo $result['lastname'];?></td>
            <td align='center'><?php echo $result['contact'];?></td>
            <td align='center'><?php echo $result['emailid'];?></td>
            <td align='center'><?php echo $result['DOB'];?></td>
            <td align='center'><?php echo "<a href='delete.php?ano=$result[account_no]'><input type='submit' value='Delete' id='del'/></a>";?></td>
        </tr>
    <?php

    }
}


?>
</table>


</body>
</html>