<?php
include("connection.php");
error_reporting(0);
?>

<html>
    <head>
        <title>Transactions</title>
</head>
<style>
    #branch_table{
                border-color:#000000;
                border: 1px solid black;
                padding: 1em;
                
                background-color: #abdbff;
            }
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
    th{
                border-color:#000000;
                background-color: #00adef;
                padding: 1em;
            }
            
            td{
                border-color:#000000;
                padding: 1em;
            }
            
            tr{
                margin: 10%;
                margin: 2em;
                background-color: #00adef;
                text-align:center;
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
                height: 60px;
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
            }

            .sample{
                width: 50%;
            }

            .lol1{
                text-align: center;
                width: 50%;
                display: flex;
                justify-content: center;
            }

</style>
<body style='background-color:#eeeeee'>
<header style="margin-top:-7.3px; margin-left:-8.5px;margin-right:-8.5px;">
            <div class="navigationBar">
                <nav>
                    <a href="userAboutUs.php">About Us</a>
                    <a href="userHomePage.php">My Account</a>
                    <a href="wbank.php">Fund Transfer</a>
                    <a href="FD.php">Fixed Deposit</a>
                    <a href="loan.php">Loan</a>
                    <a href="insurance.php">Insurance</a>
                    <a href="userOurBranches.php">Our Branches</a>
                    <a href="logout.php">Logout</a>
                </nav>
            </div>
        </header>
<br>

<h1 align='center'>Transaction Details</h1>
<table align='center' border='0px' id='branch_table'>
    <tr>
        <td align='center'>Date and Time</td>
        <td align='center'>Beneficiary Name</td>
        <td align='center'>Beneficiary Account No</td>
        <td align='center'>Beneficiary IFSC Code</td>
        <td align='center'>Amount</td>
        <td align='center'>mode</td>
        <td align='center'>Purpose</td>

<?php
session_start();
$query="select * from transaction where send_account_no='$_SESSION[accountno]'";
$data=mysqli_query($conn,$query);
$tot=mysqli_num_rows($data);
if($tot!=0)
{
    while($result=mysqli_fetch_assoc($data))
    {
    ?>
        <tr>
            <td align='center'><?php echo $result['Date_of_transaction'];?></td>
            <td align='center'><?php echo $result['b_name'];?></td>
            <td align='center'><?php echo $result['b_account_no'];?></td>
            <td align='center'><?php echo $result['IFSC code'];?></td>
            <td align='center'><?php echo $result['amount'];?></td>
            <td align='center'><?php echo $result['mode'];?></td>
            <td align='center'><?php echo $result['purpose'];?></td>
        </tr>
    <?php

    }
}


?>
</table>


</body>
</html>