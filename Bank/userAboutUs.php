<?php
    session_start();
    
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
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
            nav >a:hover{
                border: 2px solid mediumblue;
            }
            #welcome{
                text-align: right;
                margin-right: 4%;
                font-size: 1.5em;
            }

            #aboutUs{
                width: 70%;
                margin-left: 15%;
                background-color: #abdbff;
                padding: 2%;
                background-color:#ffdb4d;
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
                    <a href="userAboutUs.php"  style='border: 2px solid #0049B7;'>About Us</a>
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

        <div>
            <p id = "welcome" name = "welcome">Hello <?=$_SESSION["username"];?> !</p>
        </div>
        <div id = "aboutUs">
            <center><h2> About Us</h2></center>
            
            <p class="aboutUsContent">Our relationships are built on trust that we build every day through every interaction. Our employees are empowered to do the right thing to ensure they share our customers’ vision for success. We work as a partner to provide financial products and services that make banking safe, simple and convenient. We’re here to help navigate important milestones and strengthen futures together.</p>
            
            <p class="aboutUsContent">Our diverse business mix is fundamental in delivering a consistent, predictable and repeatable financial performance year after year. Our core businesses include Consumer & Business Banking, Corporate & Commercial Banking, Payment Services and Wealth Management & Investment Services. Through our “One Indian Bank” philosophy, we are able to bring the power of the whole bank to every customer, every single day.</p>
        </div>

        <br><br>
  <table style="background-color: black;width:1150.2px; height:40px; margin-bottom:-16px; margin-left:-14px; ">
<tr>
    <td style="color:white; text-align: center;">
        Vellore Institute of Technology Chennai
    </td>
</tr></table>
    </body>
</html>

