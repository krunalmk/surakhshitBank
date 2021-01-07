<?php
include("connection.php");
session_start();
//echo "$_SESSION[username]";
error_reporting(0);
?>
<html>
<head>
    <title>Fixed Deposit to Savings</title>
    <style>
                    input[type=text]:focus {
  background-color: black;
  color:white;
  
}
            input[type=int]:focus {
  background-color: black;
  color:white;

}
              input[type=text]:hover {
          border-color: black;
      }
      input[type=email]:hover {
          border-color: black;
      }
      input[type=int]:hover {
          border-color: black;
      }
      input[type=text],input[type=int],input[type=email]
      {
        width: 100%;
        padding: 4px 4px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type=text]:focus,input[type=int]:focus
    {
        border-color:black;
    }
    td#t1
    {
        background-color:dodgerblue;
        color:white;
        height:40px;
    }
    td#t1:hover
    {
        background-color: mediumblue;
    }
    a:link
    {
        color:white;
        text-decoration:none;
    }
    a:visited
    {
        color:white;
        text-decoration:none;
    }
    a:hover
    {
        color:white;
        text-decoration:none;
    }
    a:active
    {
        color:white;
        text-decoration:none;
    }
    a#w,a#o:link
    {
        color:black;
        text-decoration:none;
    }
    a#w,a#o:visited
    {
        color:black;
        text-decoration:none;
    }
    a#w,a#o:hover
    {
        color:black;
        text-decoration:none;
    }
    a#w,a#o:active
    {
        color:black;
        text-decoration:none;
    }
    #wo
    {
        font-size: 16px;
        padding: 10px;
        background-color: white;
        color: black;
        border: solid 1px white;
        margin: auto;
        width:100px;
        box-shadow:0px 8px 16px 0px rgba(0,0,0,0.8);
    }
            #t11
            {
                background-color: #ffdb4d;
                font-size: 18;
                border-radius: 15px;
                font-weight: bold;
            }
            #s
            {
                background-color: green;
                border-radius: 5px;
                border-color: green;
                font-size: 15;
                color:white;
                height:30;
                width:120;
            }
            #s1
            {
                background-color: blue;
                border-radius: 5px;
                border-color: blue;
                font-size: 15;
                color:white;
                height:30;
                width:90;
            }
            nav > a{
                background: #00adef;
/*                 background-image: radial-gradient(#00afff 25%, #004cff 75%); */
                border: 1px solid #0000FF;
                display: inline-block;
                width: 11.3vw;
/*                 height: 50px; */
                /*padding-left: 3.40%;
                padding-right: 3.40%;*/
                padding-top: 1.5%;
                padding-bottom: 1.5%;
                text-align: center;
                text-decoration: none;
                color: white;
                font-weight: bold;
                border-radius: 5%;
                transition: width 1s, height 2s;
            }
            nav >a:hover{
                border: 2px solid mediumblue;
            }

            .logo{
                padding-top: 0%;
                padding-bottom: 1%;
                padding-left: 0%;
                padding-right: 0%;
            }

            header{
                /* background: #005f88; */
/*                 background: #007bff; */
                background: #1492ff;
                height: 11.3%;
                padding-top:0.5%;
                padding-bottom: 0.5%;
            }

            .navigationBar{
                justify-content: center;
                height: 5%;
            }

            nav{
                margin-left: 2vw;
                margin-right: 2vw;
                height:60px;
            }


</style>
<script>

function wbank()
            {
                document.getElementById('wo').style.display='block';
            }
            function obank()
            {
                document.getElementById('wo').style.display='none';
            }
</script>
</head>
<body style='background-color:#eeeeee'>
<header style="margin-top:-8px; margin-left:-8px;margin-right:-8px;">
            <div class="navigationBar">
                <nav>
                    <a href="userAboutUs.php">About Us</a>
                    <a href="userHomePage.php">My Account</a>
                    <a href="wbank.php">Fund Transfer</a>
                    <a href="FD.php"  style='border: 2px solid #0049B7;'>Fixed Deposit</a>
                    <a href="loan.php">Loan</a>
                    <a href="insurance.php">Insurance</a>
                    <a href="userOurBranches.php">Our Branches</a>
                    <a href="logout.php">Logout</a>
                </nav>
            </div>
        </header>
    <br>
    <center><h2>Fixed Deposit to Savings Account</h2></center>
    <?php
        $query="select * from account where account_no=$_SESSION[accountno]";
        $data=mysqli_query($conn,$query);
        $result=mysqli_fetch_assoc($data);
        $_SESSION['customer_id']=$result['customer_id'];
    ?>
<form method='POST'>
    <table align='center' cellpadding=20px id='t11'>
        <tr>
            <td>Saving Account no</td>
            <td><input type='text' name='sa' required></td>
        </tr>
        <tr>
            <td>Fixed Deposit Id</td>
            <td><input type='text' name='fdid' required></td>
        </tr>
        <tr>
            <td>Customer_id</td>
            <td><?php echo $result['customer_id'];?></td>
        </tr>
        <tr>
            <td>Amount</td>
            <td><input type='int' name='am' required></td>
        </tr>
        <tr>
            <td colspan="2" align='center'><center><input type='submit' id='s' name='sub' value="Transfer to SA"></center></td>
        </tr>
    </table>
    <br>
    <center><a href='FD.php'><input type='button' id='s1' value="Back to FD"></a></center>
    
<br><br>
  <table style="background-color: black;width:1140px; height:40px;margin-bottom:-17px;margin-left:-12px">
<tr>
    <td style="color:white; text-align: center;">
        Vellore Institute of Technology Chennai
    </td>
</tr></table>

</form>

</body>
</html>

<?php
if(isset($_POST['sub']))
{
    $sa=$_POST['sa'];
    $f=$_POST['fdid'];
    $am=$_POST['am'];
    $query1="select * from account where customer_id=$_SESSION[customer_id] && account_no='$sa'";
    $data1=mysqli_query($conn,$query1);
    $result1=mysqli_fetch_assoc($data1);

    $query2="select * from fixed_deposit where cid=$_SESSION[customer_id] && fdid='$f'";
    $data2=mysqli_query($conn,$query2);
    $result2=mysqli_fetch_assoc($data2);
    //echo $f;
    $query3="select * from account where account_no='$sa'";
    $data3=mysqli_query($conn,$query3);
    $result3=mysqli_fetch_assoc($data3);

    $tot1=mysqli_num_rows($data1);
    $tot2=mysqli_num_rows($data2);
    $tot3=mysqli_num_rows($data3);
    //echo $tot2;

    if($tot1==0)
    {
        ?><script>alert("Account no is not yours")</script><?php
    }
    if($tot2==0)
    {
        ?><script>alert("Fixed Deposit account does not belongs to you")</script><?php
    }
    if($tot3==0)
    {
        ?><script>alert("Account no doesn't exists")</script><?php
    }
    //echo "<br>1".$tot1;
    //echo "<br>2".$tot2;
    //echo "<br>3".$tot3;

    $g=$result3['balance']+$am;
    $f1=$result2['prem_amount']-$am;
    //echo $g;
    //echo $f1;
    if($tot1!=0 && $tot2!=0 && $tot3!=0 && $f1>=0)
    {
        $query5="insert into fdtransfer values (CURRENT_TIMESTAMP,'$f',$_SESSION[customer_id],'$sa','$am')";
        $data5=mysqli_query($conn,$query5);
        $query6="update account set balance='$g' where account_no='$sa'";
        $data6=mysqli_query($conn,$query6);
        $query7="update fixed_deposit set prem_amount='$f1' where fdid='$f'";
        $daat7=mysqli_query($conn,$query7);
        //echo "<br>Data 5 = ".$data5;
        //echo "<br>Data 6 = ".$data6;
        //echo "<br>Data 7 = ".$data7;
        if($data5==1 && $data6==1 && $data7=1)
        {
            ?><script>alert("Successfully transfered your money")</script><?php
        }
        else
        {
            ?><script>alert("Coudn't Transfer! Pls try again")</script><?php
        }
    }
    else
    {
        ?><script>alert("You don't have this much amount in the FD")</script><?php
    }
}

?>