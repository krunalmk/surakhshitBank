<?php
include("connection.php");
session_start();
//echo "$_SESSION[username]";
error_reporting(0);
?>
<html>
<head>
    <title>Fixed Deposit</title>
    <style>
            input[type=text]:focus {
  background-color: black;
  color:white;
  
}
            input[type=int]:focus {
  background-color: black;
  color:white;

}

            input[type=email]:focus {
  background-color: black;
  color:white;

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
            function fdobank()
            {
                document.getElementById('fdoc').style.display='block';
            }
            function fdcbank()
            {
                document.getElementById('fdoc').style.display='none';
            }
        
        </script>

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
        <h2 align='center' style="color:black;">Open a Fixed Deposit</h2>
    <form method='POST'>
        <table align='center' cellpadding=15px id='t11'>
            <tr>
                <td>Account No</td>
                <td><?php echo "$_SESSION[accountno]";?></td>
            </tr>
            <tr>
                <td>Term</td>
                <td>
                    <select name='abc'>
                        <option>---Select Term---</option>
                        <option value='0.5'>6 months</option>
                        <option value='1'>1 year</option>
                        <option value='2'>2 years</option>
                        <option value='3'>3 years</option>
                        <option value='4'>4 years</option>
                        <option value='5'>5 years</option>
                        <option value='8'>8 years</option>
                        <option value='11'>11 years</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Premium Amount</td>
                <td><input type='int' name='pa' required></td>
            </tr>
            <tr>
                <td>Value Date</td>
                <td><?php echo date('d F Y');?></td>
            </tr>
            <tr>
                <td>Rate of interest</td>
                <td>8.5 %</td>
            </tr>
                <td>Contact</td>
                <td><input type='int' name='cnt' required></td>
            </tr>
            <tr>
                <td>Email id</td>
                <td><input type='email' name='em' required></td>
            </tr>
            <tr>
                <td align='center' colspan='2'><center><input type='submit' name='sub' value='Open FD' id='s'></center></td>
            </tr>
        </table>
        
    </form>
    <br>
        <center><h3><a href='fd_to_sa.php'><u style='color:blue'>Transfer money to SAVINGS</u></a></center>
        <br><br>


<?php
$query4="select * from account where account_no=$_SESSION[accountno]";
$data4=mysqli_query($conn,$query4);
$result=mysqli_fetch_assoc($data4);
if(isset($_POST['sub']))
{
    $abc=$_POST['abc'];
    $pa=$_POST['pa'];
    $cnt=$_POST['cnt'];
    $em=$_POST['em'];
    $_SESSION[fd_id]=uniqid();
    $query="insert into fixed_deposit values ('$result[customer_id]','$_SESSION[fd_id]','$_SESSION[accountno]','$abc','$pa',CURRENT_TIMESTAMP,8.5,'$cnt','$em',$abc*1.85*$pa)";
    $data=mysqli_query($conn,$query);
    if($data)
    {
        ?><script>alert("FD opened successfully");</script><?php
        $query="select * from fixed_deposit where fdid='$_SESSION[fd_id]'";
        $data=mysqli_query($conn,$query);
        $result=mysqli_fetch_assoc($data);
        echo "<center><h3>FD id :- $result[fdid]</h3></center>";
        echo "<center><h3>Maturity Amount :- $result[maturity_amount]</h3></center><br><br>";;
    }
    else
    {
       ?><script>alert("Failed to open a FD");</script><?php
    }

}
?>
  <table style="background-color: black;width:1142.99px; height:40px; margin-bottom:-16px; margin-left:-14px; ">
<tr>
    <td style="color:white; text-align: center;">
        Vellore Institute of Technology Chennai
    </td>
</tr></table>
</body>
</html>