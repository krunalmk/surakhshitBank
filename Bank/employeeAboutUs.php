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
                width:50%;
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

            #aboutUs{
                width: 70%;
                margin-left: 15%;
                background-color: #ffdb4d;
                padding: 2%;
            }
            nav >a:hover{
                border: 2px solid mediumblue;
            }
            .aboutUsContent{
                font-size: 22px;
            }
        </style>
    </head>

    <body style="background-color:#eeeeee">
        <header style="font-family: Arial; font-size:18px;margin-top:0.2px; margin-left:-6.5px;margin-right:-2.5px; width:1143px">
            <div class="navigationBar">
                <nav>
                    <a href="employeeAboutUs.php" style='border: 2px solid #0049B7;'>About Us</a>
                    <a href="employeeSchemes.php">Schemes</a>
                    <a href="employeeHomePage.php">Home</a>
                    <a href="employeeMyProfile.php">My Profile</a>
                    <a href="employeeAllUserInfo.php">User Info</a>
                    <a href="employee.php">Loan Approval</a>
                    <a href="employeeOurBranches.php">Our Branches</a>
                    <a href="employeeLogout.php">Logout</a>
                </nav>
            </div>
        </header>

        <div>
            <p id = "welcome" name = "welcome">Hello <?=$_SESSION["name"];?> !</p>
        </div>
        <div id = "aboutUs">
            <center><h2> About Us</h2></center>
            
            <p class="aboutUsContent">Our relationships are built on trust that we build every day through every interaction. Our employees are empowered to do the right thing to ensure they share our customers’ vision for success. We work as a partner to provide financial products and services that make banking safe, simple and convenient. We’re here to help navigate important milestones and strengthen futures together.</p>
            
            <p class="aboutUsContent">Our diverse business mix is fundamental in delivering a consistent, predictable and repeatable financial performance year after year. Our core businesses include Consumer & Business Banking, Corporate & Commercial Banking, Payment Services and Wealth Management & Investment Services. Through our “One Indian Bank” philosophy, we are able to bring the power of the whole bank to every customer, every single day.</p>
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

