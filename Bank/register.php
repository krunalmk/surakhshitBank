<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
    <title>
        Registration
    </title>


<style>

            input[type=text],input[type=int],input[type=password]
            {
            width: 100%;
            padding: 4px 4px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }
            input[type=text]:focus,input[type=int]:focus,input[type=password]:focus
            {
                border-color:black;
            }
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: 0;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 1.9s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 4.5s;
  animation-name: fade;
  animation-duration: 0.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid dodgerblue;
  background-color: dodgerblue;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: dodgerblue;
  font-weight:bold;
}

li a.active {
  color: white;
  background-color: mediumblue;
}

div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

   
td
{
    font-size: 20;
}
#ad,#dc,#c
{
    border-collapse: collapse;
    border-width: 1px;
    border-color:  rgba(68, 87, 196, 0.5);
    border-style: solid;
    background-color: rgba(172, 255, 255,0.5);
}

#sub
{
    background-color: #660066;
    font-size: 22;
    border-radius: 10px;
    height: 45px;
    width:110px;
    border-color:#660066 ;
    display:none;
    color:white;
}
#ad
{
    display:none;
}
#dc
{
    display:none;
}
#c
{
    display:none;
}
#ad,#dc,#c
            {
                background-color: yellow;
                font-size: 18;
                border-radius: 15px;
                font-weight: bold;
            }
            nav >a:hover{
                border: 2px solid mediumblue;
            }
nav > a{
                background: #00adef;
/*                 background-image: radial-gradient(#00afff 25%, #004cff 75%); */
                border: 1px solid #0000FF;
                display: inline-block;
                width: 13.1vw;
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
                height: 71.5px;
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
<script>
function ad()
{
    var a=document.getElementById('ad');
    var b=document.getElementById('dc');
    var c=document.getElementById('c');
    var d=document.getElementById('sub');
    a.style.display='block';
    b.style.display='none';
    c.style.display='none';
    d.style.display='none';
}
function dc()
{
    var a=document.getElementById('ad');
    var b=document.getElementById('dc');
    var c=document.getElementById('c');
    var d=document.getElementById('sub');
    a.style.display='none';
    b.style.display='block';
    c.style.display='none';
    d.style.display='none';
}
function c()
{
    var a=document.getElementById('ad');
    var b=document.getElementById('dc');
    var c=document.getElementById('c');
    var d=document.getElementById('sub');
    a.style.display='none';
    b.style.display='none';
    c.style.display='block';
    d.style.display='block';
}
</script>
</head>
<body style='background-color:#eeeeee'>
        <header style="font-family: Arial; font-size:18px; margin-top:-8px; margin-left:-8.5px;margin-right:-8.5px;">
                    <div class="navigationBar">
                        <nav>
                            <a href="Home_Page.html" >Home</a>
                            <a href="schemes.html">Schemes</a>
                            <a href="contact.php">Contact us</a>
                            <a href="userAboutUs.html">About</a>
                            <a href="employeeSignIn.php">Employee</a>
                            <a href="userSignIn.php">Login</a>
                            <a href="register.php" style='border: 2px solid #0049B7;'>Register</a>
                        </nav>
                    </div>
                </header>
    <h1 align='center'>Registration</h1><br>
    <table align='center' border=0>
        <tr>
            <td>
<center><button type='button' onclick='ad()' style="font-size:15; width:140px; height:40px; background-color: green; border-color: green; color:white;">Account Details</button></center>
            </td>
            <td>
<center><button type='button' onclick='dc()' style="font-size:15; width:140px; height:40px; background-color: red; border-color: red; color:white;">Debit Card</button></center>
            </td>
            <td>
<center><button type='button' onclick='c()' style="font-size:15; width:140px; height:40px; background-color: blue; border-color: blue; color:white;">Credentials</button></center>
            </td>
        </tr>
    </table>
<br><br><br>
<form method="POST">
<table align='center' border="0px" cellpadding="10px" id='ad' width=480px style="box-shadow: 5px 10px #888888;">
<tr>
    <td>Account No.*</td>
    <td><input type='int' placeholder="enter account no." size=27 required name='ano'></td>
</tr>
<tr>
    <td>CIF No.*</td>
    <td><input type='text' placeholder="enter cif no." size=27 required name='cif'></td>
</tr>
<tr>
    <td>IFSC Code*</td>
    <td><input type='text' placeholder="enter IFSC code" size=27 required name='ifsc'></td>
</tr>
<tr>
    <td>Country*</td>
    <td><input type='text' placeholder="enter country" size=27 required name='cntry'></td>
</tr>

</table>
<br>
<!-- <center><h2>Debit Card Details</h2></center> -->
<table align="center" border="0" cellspacing="15" cellpadding=10px id='dc' width=550px style="box-shadow: 5px 10px #888888;">
    <tr>
        <td>
            Card Types
        </td>
        <td>
            <img src="Visa.png" height=50px width=90px>       <img src="Master_Card.jpg" height=50px width=90px>       <img src="RuPay.jpg" height=50px width=90px>
        </td>
    </tr>
        <tr>
            <td>Card number </td>
            <td><input type="int" placeholder="card No." maxlength=16 size=42 required id='type2' name='crd'></td>
        </tr>
        <tr>
            <td> Card Holder </td>
            <td><input type="text" placeholder="card holder name" size=42 required id='type2' name='ch'></td>
        </tr>
        <tr>
            <td>Card type</td>
            <td><input type="radio" name="r1" required value="Visa">Visa   <input type="radio" name="r1" required value="Master Card">Master Card   <input type="radio" name="r1" required value="RuPay">RuPay</td>
        </tr>
        <tr>
            <td>Expiry Date</td>
            <td>
                <input type='date' name='dt'/>
            </td>
        </tr>
        <tr>
            <td>ATM PIN</td>
            <td><input type="password" and type="number" placeholder="atm pin" size=42 maxlength=3 required id='type2' name='atm'></td>
        </tr>
</table>
<br>
<!-- <center><h2>User Credentials</h2></center> -->
<table align='center' cellpadding=6px id='c' width=490px style="box-shadow: 5px 10px #888888;">
    <tr>
        <td>User Name*</td>
        <td><input type="text" placeholder="user name" name="un" size=28 required id='type1'></td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td>Password*</td>
        <td><input type="password" placeholder="*********" size=28 name="pass" required id='type1'></td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td>Favourite Movie*</td>
        <td><input type="password" placeholder=movie name="mov" size=28 required id='type1'></td>
    </tr>
</table><br><br>
<center><input type='submit' value='Register' id='sub' name='subm'></center>
</form>


<?php
if(isset($_POST['subm']))
{
    $ano=$_POST['ano'];
    $cif=$_POST['cif'];
    $ifsc=$_POST['ifsc'];
    $cntry=$_POST['cntry'];
    $crd=$_POST['crd'];
    $ch=$_POST['ch'];
    $ctype=$_POST['r1'];
    $ed=$_POST['dt'];
    $atm=$_POST['atm'];
    $un=$_POST['un'];
    $pass=$_POST['pass'];
    $pwd=$_POST['pwd'];
    $fm=$_POST['mov'];
    session_start();
    $_SESSION['accountno']=$ano ;


    if($ano!="" && $cif!="" && $ifsc!="" && $cntry!="")
    {
        $query1="select * from accounts where account_no='$_SESSION[accountno]'";
        $data1=mysqli_query($conn,$query1);
        $query2="select * from account where account_no='$_SESSION[accountno]'";
        $data2=mysqli_query($conn,$query2);
        $tot1=mysqli_num_rows($data1);
        $tot2=mysqli_num_rows($data2);
        $result=mysqli_fetch_assoc($data1);
        

        if($tot1==1 && $tot2==0)
        {
            
            $query="insert into account values (CURRENT_TIMESTAMP,'$ano','$cif','$result[amount]','$ifsc','$cntry','$crd','$ch','$ctype','$ed','$atm','$un','$pass','$fm')";
            $data=mysqli_query($conn,$query);
            if($data)
            {
                header('location:login.php');
                ?><script>alert("Registration Successful");</script><?php
                echo "<a href='userSignIn.php>Login</a>";
            }
            else
            {
                echo "Data not inserted";
            }
        }
        else
        {
            ?><script>alert("Account does not exists");</script><?php
        }
        ?>

</body>
</html><?php
    }

}





?>