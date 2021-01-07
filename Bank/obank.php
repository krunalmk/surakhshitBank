<?php
include("connection.php");
session_start();
//echo "$_SESSION[username]";
error_reporting(0);
?>
<html>
    <head>
        <title>Outside Bank</title>
        <style>
            input[type=text]:focus {
  background-color: black;
  color:white;
  
}
            input[type=int]:focus {
  background-color: black;
  color:white;

}
            input[type=text],input[type=int]
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
                font-weight: bold;
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
                width:80;
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
            function tab()
            {
                document.getElementById('d').style.diplay='block';
                document.getElementById('d1').style.diplay='none';
            }
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
                    <a href="wbank.php"  style='border: 2px solid #0049B7;' onmouseover='wbank()' onmouseout='obank()'>Fund Transfer</a>
                    <a href="FD.php">Fixed Deposit</a>
                    <a href="loan.php">Loan</a>
                    <a href="insurance.php">Insurance</a>
                    <a href="userOurBranches.php">Our Branches</a>
                    <a href="logout.php">Logout</a>
                </nav>
            </div>
        </header>
        <br>
        <h2 align='center' style="color:black;">Outside Bank</h2>
        <form method='POST'>
        <table align='center' cellpadding=10px id='t11'>
            <tr>
                <td>Account No</td>
                <td><?php echo "$_SESSION[accountno]";?></td>
            </tr>
            <tr>
                <td>Beneficiary Name</td>
                <td><input type='text' name='bn' required></td>
            </tr>
            <tr>
                <td>Beneficiary Account No</td>
                <td><input type='int' name='ba' required></td>
            </tr>
            <tr>
                <td>Re-enter Beneficiary Account No</td>
                <td><input type='int' name='rba' required></td>
            </tr>
            <tr>
                <td>IFSC code</td>
                <td><input type='int' name='ifsc' required></td>
            </tr>
            <tr>
                <td>Amount</td>
                <td><input type='int' name='a' required></td>
            </tr>
            <tr>
                <td>Select Transfer Mode</td>
                <td><select name='mode' required><option>--Select Type--</option>
                            <option value='NEFT'>NEFT</option>
                            <option value='RTGS'>RTGS</option>
                            <option value='IMPS'>IMPS</option>
                    </select>
                </td>
            <tr>
                <td>Purpose</td>
                <td><input type='text' name='pur' required></td>
            </tr>
            <tr>
                <td colspan="2" align='center'><center><input type='submit' name='sub' id='s' value='Transfer'></center></td>
        </table>
        
        </form>
        <br>
        <center><h3><a href='wbank.php'><u style='color:blue'>Within Bank</u></a></center>
        <br><br>
  <table style="background-color: black;width:1142.99px; height:40px; margin-bottom:-16px; margin-left:-14px; ">
<tr>
    <td style="color:white; text-align: center;">
        Vellore Institute of Technology Chennai
    </td>
</tr></table>
        <?php

            
            $query1="select * from account where account_no='$_SESSION[accountno]'";
            $data1=mysqli_query($conn,$query1);
            $result=mysqli_fetch_assoc($data1);
            //echo "$result[balance]";
            $g="$result[balance]";

        ?>
        
</body>
</html>

<?php
if(isset($_POST['sub']))
{
    $bn=$_POST['bn'];
    $ba=$_POST['ba'];
    $rba=$_POST['rba'];
    $ifsc=$_POST['ifsc'];
    $a=$_POST['a'];
    $mode=$_POST['mode'];
    $pur=$_POST['pur'];



    // $query2="select * from account where account_no='$ba'";
    // $data2=mysqli_query($conn,$query2);
    // $result1=mysqli_fetch_assoc($data2);
    // echo "$result1[balance]";
    // $f="$result1[balance]";
    // $f=$f+$a;
    $g=$g-$a;

    $zzz=0;
    if($mode=='NEFT')
    {
        if($a<=10000)
        {
            $g=$g-3;
        }
        else if($a<=100000 && $a>10000)
        {
            $g=$g-6;
        }
        else if($a<=200000 && $a>100000)
        {
            $g=$g-14;
        }
        else
        {
            $g=$g-20;
        }
    }
    if($mode=='RTGS')
    {
        if($a<200000)
        {
            ?><script>alert("Sorry, RTGS does not accept amount less than 200000");</script><?php
            $zzz=$zzz+1;
        }
        else if($a>=200000 && $a<500000)
        {
            $g=$g-24;
        }
        else if($a>=500000)
        {
            $g=$g-50;
        }
    }
    if($mode=='IMPS')
    {
        if($a<=10000)
        {
            $g=$g-10;
        }
        else if($a<=100000 && $a>10000)
        {
            $g=$g-20;
        }
        else if($a<=200000 && $a>100000)
        {
            $g=$g-30;
        }
        else
        {
            ?><script>alert("Sorry, IMPS does not accepts amount greater than 200000");</script><?php
            $zzz=$zzz+1;
        }
    }
    if($g<0)
    {
        $zzz=$zzz+1;
        ?><script>alert("Sorry, You do not have this much amount in your account");</script><?php
    }
    if($ba!=$rba)
    {
        $zzz=$zzz+1;
        ?><script>alert("Sorry, Beneficiary Account No doeent match with the confirmed one");</script><?php
    }
    // $query5="select * from account where account_no='$ba'";
    // $data5=mysqli_query($conn,$query5);
    // $tot=mysqli_num_rows($data5);

    // if($tot==0)
    // {
    //     $zzz=$zzz+1;
    //     echo "The Account no. does not exist";
    // }
    // echo $zzz;
    if($zzz==0)
    {
    //     $query3="update account set balance='$f' where account_no='$ba'";
    //     $data3=mysqli_query($conn,$query3);
        $query4="update account set balance='$g' where account_no='$_SESSION[accountno]'";
        $data4=mysqli_query($conn,$query4);
        echo "zzz value ";
        if($data4==1)
        {
            echo "Success";
            $query="insert into transaction values (CURRENT_TIMESTAMP,'$_SESSION[accountno]','$bn','$ba','$rba','$ifsc','$a','$mode','$pur')";
            $data=mysqli_query($conn,$query);
            if($data)
            {
                ?><script>alert("Transaction Successful")</script><?php
            }
            else
            {
                ?><script>alert("Transaction Failed! Please try again")</script><?php
            }
        }
    }

}

?>