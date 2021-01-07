<?php
    session_start();
    include("connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Branch</title>
        <style>
            body{
                margin: 0%;
                width: 100%;
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

            img{
                display: inline;
            }

            div > a{
                margin: 2%;
            }

            div > a >img{
                width: 100%;
                height: 100%;
            }
            
            #welcome{
                text-align: right;
                margin-right: 4%;
                font-size: 1.5em;
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
            
            #branch_table{
/*                 border-collapse:collapse; */
                border-color:#000000;
                border: 1px solid black;
                padding: 1em;
                
                background-color: #abdbff;
            }
            nav >a:hover
            {
                border: 2px solid mediumblue;
            }
            #aboutUs{
                width: 70%;
                margin-left: 15%;
                background-color: #ffdb4d;
                padding: 2%;
                font-family: Arial;
                font-size:18.5px;
            }
            
            .aboutUsContent{
                font-size: 22px;
            }
        </style>
    </head>

    <body style='background-color:#eeeeee'>
<header style="margin-top:0px; margin-left:-0.5px;margin-right:-0.5px;">
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
        <div>
            
            <center><p style="font-family: Arial;font-size:23.5px;">Various Schemes provided by us</p></center>
            <br>
            <div id = "aboutUs">
            <ul>
                <li>Interest rate can be increased 7 to 8 % if consistently minimum amount is maintained</li>
                <br><li>Taking up life insurance or a medical insurance via our system – First 3 months the premium will be paid by us</li>
                <br><li>If 2 members of your family have opened a fixed deposit then the tax on the interest would be paid by us</li>
                <br><li>Having a PPF account will lead to the waving of the charges for the outside bank transactions</li>
                <br><li>Opening a FD for min of 3yrs and a min amount of 500000 will increase the Maturity amount by 8 to 9%</li>
                <br><li>Taking a loan for minimum of 200000 will decrease the simple interest rate by 4 to 5 %</li>
                <br><li>Less than 4 outside bank transactions</li>
                <br><li>More than 10 within bank transactions</li>
                <br><li>Opening your Savings Account with a minimum amount of 10000, will increase the interest rate by 6 to 7 % for 1 full year</li>
            </ul>    
            </div>
            


        <br><br>
  <table style="background-color: black;width:1150px; height:40px; margin-bottom:-3px;float:down; margin-left:-14px; ">
<tr>
    <td style="color:white; background-color: black; text-align: center;">
        Vellore Institute of Technology Chennai
    </td>
</tr></table>
    </body>
</html>

