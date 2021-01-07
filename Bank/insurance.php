<?php
    session_start();
    include("connection.php");
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Insurance</title>
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
            input[type=text]:focus,input[type=email]:focus,input[type=number]:focus {
  background-color: black;
  color:white;
  
}
            input[type=number]:focus {
  background-color: black;
  color:white;

}
            input[type=text],input[type=number],input[type=email]
            {
            width: 100%;
            padding: 4px 4px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }
            input[type=text]:focus,input[type=int]:focus,input[type=email]:focus
            {
                border-color:black;
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
            #t11
            {
                background-color: #ffdb4d;
                font-size: 18px;
                border-radius: 15px;
                font-weight: bold;
            }
            #s
            {
                background-color: green;
                border-radius: 5px;
                border-color: green;
                font-size: 20px;
                color:white;
                height:30;
                width:80;
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
                    <a href="insurance.php" style='border: 2px solid #0049B7;'>Insurance</a>
                    <a href="userOurBranches.php">Our Branches</a>
                    <a href="logout.php">Logout</a>
                </nav>
            </div>
        </header>


        <div>
            <p id = "welcome" name = "welcome">Hello <?=$_SESSION["user_name"];?> !</p>
            <center><p style="font-family: Arial;font-size:22.5px;font-weight:bold">Get Insurance</p></center>
           


</table>

<form method='POST'>
<table align="center" border="0" cellpadding="15px" id='t11'>
    <tr>
        <td>Insured Name :</td>
        <td><?php echo "".$_SESSION['user_name'] ?></td>
    </tr>    

    <tr>
        <td>Client type </td>
        <td><input type="radio" name="ctype" required>Corporate &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="ctype" required>Non-Corporate</td>
    </tr>

    <tr>
        <td>Age Group</td>
        <td>
            <select name="age">
                <option>select age group</option>
                <option>less than 12</option>
                <option>12-20</option><option>21-30</option><option>31-40</option><option>41-50</option><option>51-60</option><option>61-65</option>
                <option>above 65
            </select>
        </td>
    </tr>

    <tr>
        <td>Address :</td>
        <td><input type='text' size=42></td>

    </tr>

<tr>
    <td>Contact No.</td>
    <td><input type='text' size=42></td>
</tr>

<tr>
    <td>Email</td>
    <td><input type='email' size=42></td>
</tr>

<tr>
    <td>Adhaar No.</td>
    <td><input type="number" placeholder="" size=42 required></td>
</tr>

<tr>
    <td>PAN No</td>
    <td><input type="text" placeholder="" size=42 required></td>
</tr>

<tr>
    <td>Period of Insurance</td>
    <td>
        &nbsp From: &nbsp&nbsp&nbsp&nbsp
        <select>
            <option> Day </option><option>1</option>
            <option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option>
            <option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option>
            <option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option>
            <option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
            <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
        </select>

        <select>
            <option>Month</option>
            <option>Jan</option><option>Feb</option><option>March</option><option>April</option><option>May</option><option>June</option>
            <option>July</option><option>August</option><option>Sept</option><option>Oct</option><option>Nov</option><option>Dec</option>
        </select>

        <select>
            <option>Year</option>
            <option>2020</option><option>2021</option><option>2022</option><option>2023</option><option>2024</option><option>2025</option>
            <option>2026</option><option>2027</option><option>2028</option><option>2029</option><option>2030</option><option>> 2030</option>
        </select>
        
    </td>
</tr>

<tr>
    <td></td>
    <td>
        &nbsp To: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <select>
            <option> Day </option><option>1</option>
            <option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option>
            <option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option>
            <option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option>
            <option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
            <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
        </select>

        <select>
            <option>Month</option>
            <option>Jan</option><option>Feb</option><option>March</option><option>April</option><option>May</option><option>June</option>
            <option>July</option><option>August</option><option>Sept</option><option>Oct</option><option>Nov</option><option>Dec</option>
        </select>

        <select>
            <option>Year</option>
            <option>2020</option><option>2021</option><option>2022</option><option>2023</option><option>2024</option><option>2025</option>
            <option>2026</option><option>2027</option><option>2028</option><option>2029</option><option>2030</option><option>> 2030</option>
        </select>
        
    </td>
</tr>

<tr>
    <td colspan="2" align='center'><input type="submit" name='Proceed' value="Proceed" id="s"></td>
</tr>

</table>

</form>

<?php
$a=rand(100,999);
if(isset($_POST['Proceed']))
{
    echo "<center><h4 style='font-size:23px'>Your premium amount : $a</h4></center>";
}


?>
<table width=100% height=4% bgcolor="orange">
    <tr>

    </tr>
</table>


<br><br><br>
  <table style="background-color: black;width:1150.9px; height:40px; margin-bottom:-3px;float:down; margin-left:-14px; ">
<tr>
    <td style="color:white; background-color: black; text-align: center;">
        Vellore Institute of Technology Chennai
    </td>
</tr></table>
    </body>
</html>

