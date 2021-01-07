<!DOCTYPE html>
<html>
<?php
    session_start();
    include("connection.php");
    function check_auth()
    {
        if (isset($_SESSION['cif']))
        {
                return true;
        }
        else{
            return false;
        }
    }
    
    if(check_auth()){
        $otp = $_POST["otp"];
        if($otp == $_SESSION["otp"]){
            header("Location: userHomePage.php");
        }
        else{
            echo '<style type="text/css">
                    #errOTP {
                        visibility:visible;
                    }
                    </style>';
        }
    }
            
?>
    <head>
        <title>OTP verification</title>
    </head>
    <style>
        #otp {
            padding-left: 15px;
            letter-spacing: 40px;
            border: 0;
            background-image: linear-gradient(to left, black 70%, rgba(255, 255, 255, 0) 0%);
            background-position: bottom;
            background-size: 50px 1px;
            background-repeat: repeat-x;
            background-position-x: 35px;
            width: 160px;
            min-width: 160px;
        }
    </style>
    
    <body>
        <center><u><h1>OTP cerification</h1></u></center>
        <div style='margin-left:40%;'>
            <form action="" method = "POST">
            <center style = "color: red; visibility : hidden;" id = "errOTP" name = "errOTP" >Enter OTP again</center>
                <div>
                    <label for = "otp">Enter OTP:</label>
                    <input type = "text" name = "otp" id = "otp" maxlength = "4"/>
                </div>
                <div>
                    <input type = "submit" name = "submit" id = "submit" />
                </div>
                
            </form>
        </div>
    </body>
</html>
