<?php
include("connection.php");
session_start();
//echo "$_SESSION[username]";
?>
<html>
<head>
    <title>User Home</title>
    <style>
        table
        {
            background-color:black;
            color:white;
            height:40px;
            margin:0;
        }
        *
        {
            margin: 0;
            padding:0;
        }
        td:hover
        {
            font-weight: bold;
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
        body
        {
            
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

    </script>
</head>
<body onload="startTime()">
    
    <table width=100% border=0 >
        <tr>
            <td width=12.5% align="center" style="font-weight: bold; color:white;">My Accounts</td>
            <td width=12.5% align="center" onmouseover='wbank()' onmouseout='obank()'>
                <div>Fund Transfer
                    <div id='wo' style='display:none; float: center; position: absolute;'><p><a href='wbank.php' id='w'>Within Bank</a></p><br><p><a id='o' href='obank.php'>Outside Bank</a></p></div>
                </div>
            </td>
            <td width=12.5% align="center">Bill Payments</td>
            <td width=12.5% align="center"><a href='FD.php' style='color:white; text-decoration: none;'>Fixed Deposit</a></td>
            <td width=12.5% align="center">Our Branches</td>
            <td width=12.5% align="center"><a href='loan.php' style='color:white; text-decoration: none;'>Loan Apply</a></td>
            <td width=12.5% align="center">About Us</td>
            <td width=12.5% align="center"><a href='logout.php' style="color:white; text-decoration:none;">Log Out</a></td>
        </tr>
    </table>
    
    <?php echo "Account No: - $_SESSION[accountno]<br>";?>
    <a href='transaction.php' style="color:black; text-decoration: none">Transaction</a>
    <?php

    date_default_timezone_set('Asia/Kolkata');
    echo "<br>Date : ".date('d F Y - l');

    
    ?>
    <div id="txt"></div>
</body>
</html>