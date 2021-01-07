<?php
include("connection.php");
session_start();
//echo "$_SESSION[username]";
?>
<html>
    <head>
        <title>User Home</title>
        <style>
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
            #t2
            {
                color:white;
                height:40px;
                background-color:green;
                text-align:center;
                width:150px;
                float:center;
                padding:20px;
                font-size:20;
            }
            #t2:hover
            {
                background-color:darkgreen;
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


            
        </style>
    </head>
<body>
    <table width=100% border=0>
        <tr>
            <td width=12.5% align="center" id='t1'>My Accounts</td>
            <td width=12.5% align="center" id='t1'><a href='fund_transfer.php'>Fund Transfer</a></td>
            <td width=12.5% align="center" id='t1'>Bill Payments</td>
            <td width=12.5% align="center" id='t1'>Fixed Deposit</td>
            <td width=12.5% align="center" id='t1'>Our Branches</td>
            <td width=12.5% align="center" id='t1'>Loan Apply</td>
            <td width=12.5% align="center" id='t1'>About Us</td>
            <td width=12.5% align="center" id='t1'>Log Out</td>
        </tr>
    </table>
        <br><br><br>
        <div id='t2'>
            <a href='wbank.php'>Within Bank</a>
        </div>
        <br>
        <div id='t2'>
        <a href='obank.php'>Outside Bank</a>
        </div>


</body>
</html>