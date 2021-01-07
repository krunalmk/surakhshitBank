<?php
    session_start();
    
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <style>
           

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
                height: 5%;
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

            .groupOfBigButtons{
                margin-top: 5%;
                margin-left: 5%;
                margin-right: 10%;
                width: 100%;
            }

            .groupOfTwoBigButtons{
                text-align: center;
                width: 90%;
                display: flex;
                justify-content: center;
                
            }

            .bigButtons{
                width: 50%;
                text-decoration: none;
                margin: 1%;
                padding: 75px;
                color: white;
                background-color: #0049B7;
            }
            
            #welcome{
                text-align: right;
                margin-right: 4%;
                font-size: 1.5em;
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

function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
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

    <body onload="startTime()" style="background-color:#eeeeee">
        <header style="margin-top:-8px; margin-left:-8px;margin-right:-8px;">
            <div class="navigationBar">
                <nav>
                    <a href="userAboutUs.php">About Us</a>
                    <a href="userHomePage.php" style='border: 2px solid #0049B7;'>My Account</a>
                    <a href="obank.php"  onmouseover='wbank()' onmouseout='obank()'>Fund Transfer</a>
                    <a href="FD.php">Fixed Deposit</a>
                    <a href="loan.php">Loan</a>
                    <a href="insurance.php">Insurance</a>
                    <a href="userOurBranches.php">Our Branches</a>
                    <a href="logout.php">Logout</a>
                </nav>
            </div>
        </header>

        <div>
            <p id = "welcome" name = "welcome">Hello <?=$_SESSION["user_name"];?> !</p>
        </div>
        <?php echo "<center><span style='font-family: Arial; font-size:17.5px; font-weight:bold;'>   Account No: - $_SESSION[accountno]</center><br>";?>
   
   <?php

   date_default_timezone_set('Asia/Kolkata');
   echo "<center><span style='font-family: Arial; font-size:17.5px; font-weight:bold;'>".date('d F Y - l')."</center>";

   ?><br><br>
        <a href='schemes.php' style='text-decoration:none; color:black;'><div  style="font-family: Arial; box-shadow: 5px 10px #1b2e53;font-size:17.5px; margin-left:263px;width:50.4%; padding:15px; text-align:center; background-color:#ffd633;">SCHEMES</div></a>
        <div style="width: 60%; margin-left: 20%; margin-right: 20%;">
        <div class="groupOfBigButtons">
            <div class="groupOfTwoBigButtons" style="font-family: Arial; font-size:17.5px;">
                <a href="wbank.php" class="bigButtons">Fund Transfer</a>
                <a href="userMyProfile.php" class="bigButtons" style='background-color:#ff0000'>My Profile</a>
            </div>

            <div class="groupOfTwoBigButtons" style="font-family: Arial; font-size:17.5px;">
                <a href="FD.php" class="bigButtons" style='background-color:#29a329'>Create FD</a>
                <a href="transaction.php" class="bigButtons">Transactions</a>
            </div>
        </div>
        </div>
        <br><br>    <br><br>
  <table style="background-color: black;width:1142.99px; height:40px; margin-bottom:-16px; margin-left:-14px; ">
<tr>
    <td style="color:white; text-align: center;">
        Vellore Institute of Technology Chennai
    </td>
</tr></table>
    </body>
</html>
