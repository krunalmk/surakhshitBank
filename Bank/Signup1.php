O<?php
include("connection.php");

?>
<html>
<head>
    <title>
        Registration
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
   
<br><br><br>
<form method="POST">
<table align='center' border="0px" cellpadding="10px">
<tr>
    <td>Account No.*</td>
    <td><input type='int' placeholder="enter account no." size=27 required name='ano'></td>
</tr>
<tr>
    <td>CIF No.*</td>
    <td><input type='text' placeholder="enter cif no." size=27 required name='cif'></td>
</tr>
<tr>
    <td>Branch Code*</td>
    <td><input type='text' placeholder="enter branch code" size=27 required name='bc'></td>
</tr>
<tr>
    <td>Country*</td>
    <td><input type='text' placeholder="enter country" size=27 required name='cntry'></td>
</tr>
<tr>
    <td>Contact No.*</td>
    <td><input type='text' placeholder="enter contact no." size=27 required name='cn'></td>
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
    $ano=$_POST['ano'];
    $cif=$_POST['cif'];
    $bc=$_POST['bc'];
    $cntry=$_POST['cntry'];
    $cn=$_POST['cn'];
    session_start();
    $_SESSION['accountno']=$ano ;


    if($ano!="" && $cif!="" && $bc!="" && $cntry!="" && $cn!="")
    {
        $query1="select * from accounts where account_no='$_SESSION[accountno]'";
        $data1=mysqli_query($conn,$query1);
        $query2="select * from signup where accountno='$_SESSION[accountno]'";
        $data2=mysqli_query($conn,$query2);
        $tot1=mysqli_num_rows($data1);
        $tot2=mysqli_num_rows($data2);

        echo $tot1;
        echo $tot2;

        
        if($tot1==1 && $tot2==0)
        {
            $query="insert into signup values ('$ano','$cif','$bc','$cntry','$cn')";
            $data=mysqli_query($conn,$query);
            header('location:Signup2.php');
        }
        else
        {
            echo "Data not inserted";
        }
    }

}





?>