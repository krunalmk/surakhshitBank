<?php
    session_start();
    include('connection.php');
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Update Profile</title>
        <style>
            body{
                margin: 0%;
                width: 100%;
            }

            nav > a{
                background: #00adef;
                border: 1px solid #0000FF;
                display: inline-block;
                width: 11.3vw;
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
            
            .upd_div{
                margin: 4%;
                margin-left: 20%;
                background: #abdbff;
                width:60%;
            }
            
            #upd_pass_button, #upd_phone_button{
                display: block;
                background: #ffdb4d;
                text-decoration: bold;
                margin-left: 0%;
                margin-right: 0%;
                margin-bottom: 2%;
                padding-left: 2%;
                padding-top: 1%;
                padding-bottom: 1%;
                cursor: pointer;
            }
            
            #upd_pass_button : hover{
                background-color: black;
                background: black;
                color: yellow;
            }
            
            #update_password{
                width: 100%;
                margin-left: 40%;
                align-content: space-between;
                display: none;
                padding-bottom: 3%;
            }
            
            #update_password label, input{
                margin-top: 1%;
/*                 display: flex; */
                
            }
            
            #update_phone{
                width: 50%;
                margin-left: 40%;
                align-content: space-between;
                display: none;
                padding-bottom: 3%;
            }
            
            #update_phone label, input{
                margin-top: 1%;
            }
            
            #submit_for_pass, #submit_for_phone {
                padding: 0.5em;
                width: 10em;
                text-align: center;
                margin-top: 2%;
            }

            .userInfo{
                border: 1px solid black;
                width: 50%;
                margin-left: 25%;
                background-color: #abdbff;
            }
            
            #myProfile{
                margin: 2%;
            }
            
            tr{
                background-color: #00adef;
            }
            
            td{
                padding: 2%;
                width: 75%;
            }
            #ttt
            {
               width:600px; 
            }
            nav >a:hover{
                border: 2px solid mediumblue;
            }
        </style>
    </head>

    <script>
        function upd_pass_button(){
//             if(document.getElementById("update_password").style.display.localeCompare("none") == 0){
                document.getElementById("update_password").style.display = "block";
//             else{
//                 document.getElementById("update_password").style.display = "none";
//             }
        }
        
        function upd_phone_button(){
            document.getElementById("update_phone").style.display = "block";
        }
    </script>
    
    <body style='background-color:#eeeeee'>
<header style="margin-top:0px; margin-left:-0.5px;margin-right:0px;">
            <div class="navigationBar">
                <nav>
                    <a href="userAboutUs.php">About Us</a>
                    <a href="userHomePage.php">My Account</a>
                    <a href="wbank.php">Fund Transfer</a>
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

        <div class = "upd_div">
            <a onclick = "upd_pass_button()" id = "upd_pass_button" name = "upd_pass_button"> Update password</a>
            <div id = "update_password">
                <form id = "form_upd_pass" name = "form_upd_pass" method = "POST" action = "">
                    <div>
                    <label for = "upd_pass_curr">Enter current password</label>
                    <input type = "password" id = "upd_pass_curr" name = "upd_pass_curr" placeholder ="Your current password">
                    </div>
                    
                    <div>
                    <label for = "upd_pass_new">Enter new password</label>
                    <input type = "password" id = "upd_pass_new" name = "upd_pass_new" placeholder ="New password">
                    </div>
                    
                    <div>
                    <label for = "upd_pass_confirm">Confirm new password</label>
                    <input type = "password" id = "upd_pass_confirm" name = "upd_pass_confirm" placeholder ="Confirm New password">
                    </div>
                    <input type = "submit" id = "submit_for_pass" name='pwd'>
                </form>
                
            </div>
            
            <a onclick = "upd_phone_button()" id = "upd_phone_button" name = "upd_phone_button"> Update phone number</a>
            <div id = "update_phone">
                <form id = "form_upd_phone" name = "form_upd_phone" method = "POST" action = "">
                    <div>
                    <label for = "upd_pass_curr">Enter current phone</label>
                    <input type = "tel" id = "upd_phone_curr" name = "upd_phone_curr" placeholder ="Your current phone">
                    </div>
                    
                    <div>
                    <label for = "upd_phone_new">Enter new phone</label>
                    <input type = "tel" id = "upd_phone_new" name = "upd_phone_new" placeholder ="New phone">
                    </div>
                    
                    <div>
                    <label for = "upd_phone_confirm">Confirm new phone</label>
                    <input type = "tel" id = "upd_phone_confirm" name = "upd_phone_confirm" placeholder ="Confirm New phone">
                    </div>
                    <input type = "submit" id = "submit_for_phone" name='phone'>
                </form>
            </div>
        </div>
        
       


<?php



if(isset($_POST['phone']))
{
    $cp=$_POST['upd_phone_curr'];
    $up=$_POST['upd_phone_new'];
    $cup=$_POST['upd_phone_confirm'];
    $query="select * from accounts where account_no='$_SESSION[accountno]' and contact='$cp'";
    $data=mysqli_query($conn,$query);
    $tot=mysqli_num_rows($data);
    if($tot==1)
    {
        if($up==$cup)
        {
            $query1="update accounts set contact='$up' where account_no='$_SESSION[accountno]'";
            $data1=mysqli_query($conn,$query1);
            //echo $up;
            //echo $_SESSION['accountno'];
            if($data1)
            {
                ?><script>alert("Phone No updated successfully");</script><?php
            }
            else
            {
                ?><script>alert("Failed to update Phone No");</script><?php
            }
        }
        else
        {
            ?><script>alert("Updated Phone No and Confirm Phone No doesn't matches");</script><?php
        }
    }
    else
    {
        ?><script>alert("Your Current Phone No is wrong");</script><?php
    }

}


if(isset($_POST['pwd']))
{
    $cp=$_POST['upd_pass_curr'];
    $up=$_POST['upd_pass_new'];
    $cup=$_POST['upd_pass_confirm'];
    $query="select * from account where account_no='$_SESSION[accountno]' and password='$cp'";
    $data=mysqli_query($conn,$query);
    $tot=mysqli_num_rows($data);
    if($tot==1)
    {
        if($up==$cup)
        {
            $query1="update account set password='$up' where account_no='$_SESSION[accountno]'";
            $data1=mysqli_query($conn,$query1);
            //echo $up;
            //echo $_SESSION['accountno'];
            if($data1)
            {
                ?><script>alert("Password updated successfully");</script><?php
            }
            else
            {
                ?><script>alert("Failed to update Password");</script><?php
            }
        }
        else
        {
            ?><script>alert("Updated Password and Confirm Password doesn't matches");</script><?php
        }
    }
    else
    {
        ?><script>alert("Your current password is wrong");</script><?php
    }

}

$query="select * from accounts where account_no='$_SESSION[accountno]'";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
?>
<table align='center' id='ttt'>
    <tr>
        <td>Photo</td>
        <td id='ttt'><?php echo "<img src='$result[photo]' width=180px height=120px";?></td>
    </tr>
        </tr>
        <tr>
        <td>Customer Id</td>
        <td id='ttt'><?php echo "$result[customer_id]";?></td>
    </tr>

        <tr>
        <td>Account No</td>
        <td id='ttt'><?php echo "$result[account_no]";?></td>
    </tr>
        <tr>
        <td>Balance</td>
        <td id='ttt'><?php echo "$result[amount]";?></td>
    </tr>
        <tr>
        <td>First Name</td>
        <td id='ttt'><?php echo "$result[firstname]";?></td>
    </tr>
        <tr>
        <td>Last Name</td>
        <td id='ttt'><?php echo "$result[lastname]";?></td>
    </tr>
        <tr>
        <td>Contact</td>
        <td id='ttt'><?php echo "$result[contact]";?></td>
    </tr>
        <tr>
        <td>Email Id</td>
        <td id='ttt'><?php echo "$result[emailid]";?></td>
    </tr>
        <tr>
        <td>DOB</td>
        <td id='ttt'><?php echo "$result[DOB]";?></td>
    </tr>
</table>

<br><br><br><br>
    <div style="background-color: black;width:1150.5px; height:40px; margin-bottom:-52px; margin-left:-14px; ">
    <p align='center' style="padding:2.9px; color:white; background-color:black;">
        Vellore Institute of Technology Chennai</p>
</div>
    </body>
</html>