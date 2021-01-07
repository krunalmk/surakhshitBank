<?php
include("connection.php");
error_reporting(0);

?>


<html>
    <head>
        <title>Registration</title>
    <style>
        table
        {
            background-color: ;
            color:darkblue;
            border-radius:20px;
            font-size:22;
            padding:10px;
        }
        #b
        {
            background-color: orange;
            border-color:  orange;
            border-radius:5px;
            font-size: 24;
            
            height:38px;
            width:160px;
            text-align: center;

        }
        #b:hover
        {
            background-color:green;
            border-color:green;
            color:white;
        }
        table
        {
            background-color: rgba(213, 240, 240,0.8)
        }
        #type1
{
    width:250px;
    height:21px;
    border:0;
    outline:0;
    background:transparent;
    border-bottom:2px solid black ;
    color:black;
    font-size:20px;
}

a:visited {
  color: black;
  text-decoration:none;
}a:link {
  color: black;
  text-decoration:none;
}

/* mouse over link */
a:hover {
  color: black;
  text-decoration:none;
}

/* selected link */
a:active {
  color: black;
  text-decoration:none;
}
  img.i
{
    height:25px;
    width:25px;
}

    <link rel="stylesheet" href="style.css">

    </style>
    </head>
<body bgcolor="#F1F3F6">
<br><br><br>
<div>
    <form action="" method="POST" enctype="multipart/form-data">

<table align='center' >
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
        <td>RePassword*</td>
        <td><input type="password" placeholder="*********" size=28 name="pwd" required id='type1'></td>
    </tr>
    <tr>
        <td>Favourite Movie*</td>
        <td><input type="password" paceholder="***" name="mov" size=28 required id='type1'></td>
    </tr>

    
    <tr><td colspan=2 align='center'><input type="checkbox" name="remember" style="margin-bottom:15px" required>Agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</td>
<tr></tr><tr></tr>
<tr><td colspan=2 align='center'><input type="checkbox" name="remember" style="margin-bottom:15px"> Remember me</td></tr>
<tr><td align="center">
<h2><input type="submit" value="Submit" id="b" name="sub"></h2></td><td align="center">
<h2><input type="reset" value="Cancel" id="b" name="subi"></h2></td></tr>
<tr></tr>
<tr>
    <td align='center' colspan='2'><a href='log.php'>Existing User</a></td></tr>
</table>
</form>
</div>
</body>
</html>


<?php

if(isset($_POST['sub']))
{
    $un=$_POST['un'];
    $pass=$_POST['pass'];
    $pwd=$_POST['pwd'];
    $fm=$_POST['mov'];
    session_start();

    if($un!="" && $pass!="" && $pwd!="" && $fm!="")
    {
        $query="insert into signup2 values ($_SESSION[accountno],'$un','$pass','$pwd','$fm')";
        $data=mysqli_query($conn,$query);   
        if($data)
        {
            echo "<h2 align='center'>Successfully Registered<h2><br>";
            echo "<h2 align='center'>Click on Existing User to login<h2>";
            header('location:login.php')
        }
        else
        {
            echo "Data not inserted into databse";
        }
    }
}
session_unset();
?>