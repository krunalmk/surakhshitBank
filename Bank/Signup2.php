<?php
include("connection.php");

?>
<html>
    <head>
        <title>Card Details</title>
    </head>
    <style>
        table{
            font-size: 20px;
        }
        #button
            {
                background-color: orange;
                height:40px;
                width:150px;
                border-radius: 25px;
                font-size: large;
            }
            #s
            {
                background-color: plum;
                font-size: large;
                font-size: 20px;
                width: 500px;
                height: 40px;
            }
        body{
            
        }

 img.i
{
    height:25px;
    width:25px;
} 
#type1
{
    width:250px;
    height:21px;
    border:0;
    outline:0;
    background:transparent;
    border-bottom:2px solid white;
    color:black;
    font-size:17px;
}
#type2
{
    width:250px;
    height:21px;
    border:0;
    outline:0;
    background:transparent;
    border-bottom:2px solid black;
    color:black;
    font-size:17px;
}
    </style>



<body>
       


    <table width=100% height=20px bgcolor="black">
        <tr>

            <td align="center"><font color="white" size=6>Bank</font></td>
        </tr>
    </table>
  
    </table>
    <form method=POST>

        <table align="center" border="0" cellspacing="15" >
        
            <tr>
                <td colspan="2" rowspan="2" align="center" id="s" >
                    Debit Card Details
                </td>
            </tr>
        </table>
        <table align="center" border="0" cellspacing="15" >
       
            
        <tr>
            <td>
                Accepted Card Types
            </td>
            <td>
                <img src="Visa.png" height=50px width=90px>       <img src="Master_Card.jpg" height=50px width=90px>       <img src="RuPay.jpg" height=50px width=90px>
            </td>
        </tr>
        <tr>
            <td>Card number </td>
            <td><input type="number" placeholder="card No." maxlength=16 size=42 required id='type2' name='crd'></td>
        </tr>
        <tr>
            <td> Card Holder </td>
            <td><input type="text" placeholder="card holder name" size=42 required id='type2' name='ch'></td>
        </tr>
        <tr>
            <td>Card type</td>
            <td><input type="radio" name="r1" required value="Visa">Visa   <input type="radio" name="r1" required value="Master Card">Master Card   <input type="radio" name="r1" required value="RuPay">RuPay</td>
        </tr>
        <tr>
            <td>Expiry Date</td>
            <td>
                <input type='date' name='dt'/>
            </td>
        </tr>
        <tr>
            <td>ATM PIN</td>
            <td><input type="password" and type="number" placeholder="atm pin" size=42 maxlength=3 required id='type2' name='atm'></td>
        </tr>
        
        <tr>
            <td colspan="2" align='center'><input type="submit" value="Submit" id="button" name='sub'></td>
        </tr>
        
        </table>
        
        </form>

        <table width=100% height=6% bgcolor="black">
        <tr>
        </tr>
</table>

</body>
</html>

<?php
session_start();
if(isset($_POST['sub']))
{
    $crd=$_POST['crd'];
    $ch=$_POST['ch'];
    $ctype=$_POST['r1'];
    $ed=$_POST['dt'];
    $atm=$_POST['atm'];
    echo "$_SESSION[accountno]";
    if($crd!="" && $ch!="" && $ctype!="" && $ed!="" && $atm!="")
    {
        $query="insert into signup1 values ($_SESSION[accountno],'$crd','$ch','$ctype','$ed','$atm')";
        $data=mysqli_query($conn,$query);
        if($data)
        {
            header('location:Signup3.php');
        }
        else
        {
            echo "Data not inserted";
        }
    }
}
?>
