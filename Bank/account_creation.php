<?php
include("connection.php");

?>
<html>
<head>
    <title>
        Opening Account
    </title>
</head>
<style>
td
{
    font-size: 20;
}
table
{
    border-collapse: collapse;
    border-width: 1px;
    border-color:  rgba(68, 87, 196, 0.5);
    border-style: solid;
    background-color: rgba(172, 255, 255,0.5);
}
body
{
    background-color: rgb(241, 240, 255);
}
#sub
{
    background-color: rgb(255, 232, 101);
    font-size: 22;
    border-radius: 10px;
    height: 30px;
    border-color:rgb(255, 232, 101) ;
}

</style>
<body>
<center><h1>Sign Up</h1></center>

<form method="POST" enctype="multipart/form-data">
<table align='center' border="0px" cellpadding="10px">
<tr>
    <td>Photograph</td>
    <td><input type="file" name="upload_file"></td>
</tr>
<tr>
    <td>Customer Id*</td>
    <td><input type='int' placeholder="enter customer_id" size=27 required name='cid'></td>
</tr>
<tr>
    <td>Account No.*</td>
    <td><input type='int' placeholder="enter account no." size=27 required name='ano'></td>
</tr>
<tr>
<td>First Name*</td>
<td><input type='text' size=27 placeholder='enter first name' required name='fn'></td>
</tr>
<tr>
    <td>Last Name</td>
    <td><input type='text' size=27 placeholder='enter last name' required name='ln'></td>
    </tr>
<tr>
    <td>Balance*</td>
    <td><input type='int' placeholder="enter balance" size=27 required name='bal'></td>
</tr>
<tr>
    <td>Contact*</td>
    <td><input type='int' placeholder="enter contact no." size=27 required name='cn'></td>
</tr>
<tr>
    <td>Email-id*</td>
    <td><input type='email' placeholder="enter email-id" size=27 required name='em'></td>
</tr>
<tr>
    <td>DOB</td>
    <td><input type='date' name='dt'></td>
</tr>
<tr>
    <td colspan=2 align='center'><input type='submit' value='Submit' id='sub' name='subm'></td>
</tr>
</table>
</form>

</body>
</html>

<?php
if(isset($_POST['subm']))
{
    $cid=$_POST['cid'];
    $ano=$_POST['ano'];
    $fn=$_POST['fn'];
    $ln=$_POST['ln'];
    $cn=$_POST['cn'];
    $em=$_POST['em'];
    $dt=$_POST['dt'];
    $bal=$_POST['bal'];

    $filename=$_FILES["upload_file"]["name"];
    $tempname=$_FILES["upload_file"]["tmp_name"];
    $folder="gallery/".$filename;
    move_uploaded_file($tempname,$folder);

    if($cid!="" && $ano!="" && $fn!="" && $ln!="" && $cn!="" && $em!="" && $dt!="")
    {
        $query="insert into accounts values ('$folder','$cid','$ano','$bal','$fn','$ln','$cn','$em','$dt')";
        $data=mysqli_query($conn,$query);
        if($data)
        {
            header("location:show.php");
        }
        else
        {
            echo "Data not inserted";
        }
    }

}





?>