<!DOCTYPE html>
 <html>
    <script src='https://www.google.com/recaptcha/api.js' async defer ></script>
    <script>
    
    </script>
    <head>
        <title>Sign In- User</title>

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
                background-color:#eeeeee;
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
            h2{
                margin-top: 2%;
            }
            input{
                display: block;
                width: 100%;
                margin-top: 2%;
                padding: 5px;
            }

            label{
                display: inline;
            }
            #btn
            {
                background:yellow;
                border-color:yellow;
                font-size:15px;
            }

            #signInDivision{
                border-style: ridge;
                display: block;
                padding: 3%;
                margin-left: 30%;
                margin-right: 30%;
                width: 40%;
                box-shadow: 5px 10px #888888;
                background-color:white;
            }

            .g-recaptcha{
                margin-top: 2%;
            }
            
            
        </style>
    </head>

    <body style='background-color:#eeeeee'>
    <div style="font-family: Arial; font-size:17.5px;">
    <ul>
        <li><a href="Home_Page.html">Home</a></li>
        <li><a href="schemes.html">Schemes</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="userAboutUs.html">About</a></li>
        <li><a href="employeeSignIn.php">Employee</a></li>
        <li><span align='right' ><a class="active" href="userSignIn.php">Login</a></span></li>
        <li><span align='right' ><a href="register.php">Register</a></span></li>
    </ul>
    </div>
    <br><br>
        <div id = "signInDivision">
            <form id="signInForm" name="signInForm" method="POST">
                <center><h1>Login</h1></center>  
                <!-- <label for="cif">CIF Number</label> -->
                <input type="text" placeholder="username" id="type1" name='un'>
                
                <!-- <label for="password">Password</label> -->
                <input type="password" placeholder="password" id="type1" name='pwd'>
                <div class="g-recaptcha" data-sitekey="6LcSs7YZAAAAAObcGwo7jICW37-srud1Qczmgi6f"></div>
                    
                    <input type="submit" name="submit" value="Login" id="btn"></br>
            </form>
            <a href="register.php" style="text-align: center; display: block;">New registration</a>
        </div>
        
    </body>
 </html>

<?php
include('connection.php');
session_start();
if(isset($_POST['submit']))
{
    $un=$_POST['un'];
    $pwd=$_POST['pwd'];
    
    $query="select * from account where username='$un' and password='$pwd'";
    $data=mysqli_query($conn,$query);
    $result=mysqli_fetch_assoc($data);
    $_SESSION['accountno']=$result['account_no'];
    $tot=mysqli_num_rows($data);
    $result=mysqli_fetch_assoc($data);
    //echo $tot;
    $_SESSION['username']=$un;
    if($tot==1)
    {
        //echo "Login Ok";
        $_SESSION['user_name']=$un ; 
        header('location:userHomePage.php');
    }
    else
    {
        ?><script>alert('Login Failed, Please try again')</script><?php
    }
}

?>