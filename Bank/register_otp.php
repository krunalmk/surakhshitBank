<html>
    <head>
        <title>Register</title>
</head>
<body>

<?php
require 'PHPMailer/PHPMailer-5.2-stable/PHPMailer-5.2-stable/PHPMailerAutoload.php';

$mail = new PHPMailer;
include('connection.php');
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
session_start();
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'quickserve751@gmail.com';                 // SMTP username
$mail->Password = 'quick@123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = '587';                                    // TCP port to connect to

$mail->setFrom('quickserve751@gmail.com');
$mail->addAddress('sahilsachin.donde2019@vitstudent.ac.in');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$otp=rand(4001,9980);
$_SESSION['otp']=$otp;
$mail->Subject = 'E-Banking Registration OTP';
$mail->Body    = "Your One Time Password (OTP) for your OTP is <b> $otp </b> at your specified address";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


if(!$mail->Send()) 
{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    
} 
else 
{
    echo 'Message has been sent';
}
?>
<form method="POST">
<br>
<table align="center" id='otp'>
    <tr>
        <td><input type='int' name='otp1'></td>
    </tr>
</table>
<center><input type='submit' value='Register' id='sub' name='subm'></center>
</form>

<?php
if(isset($_POST['subm']))
{
    echo "fffgd";
    $o=$_POST['otp1'];
    if($_SESSION['otp']==$o)
    {
        echo "Hello";
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
        
        }
    }
}
?>
