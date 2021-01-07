<?php
    session_start();
    include('connection.php');
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
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
                margin: 4%;
            }
            nav >a:hover{
                border: 2px solid mediumblue;
            }
            tr{
                background-color: #00adef;
            }
            
            td{
                padding: 2%;
                width: 900px;
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
    
    <body style="background-color:#eeeeee">
        <header style="font-family: Arial; font-size:18px;margin-top:0.2px; margin-left:-6.5px;margin-right:-2.5px; width:1143px">
            <div class="navigationBar">
                <nav>
                    <a href="employeeAboutUs.php">About Us</a>
                    <a href="employeeSchemes.php">Schemes</a>
                    <a href="employeeHomePage.php">Home</a>
                    <a href="employeeMyProfile.php" style='border: 2px solid #0049B7;'>My Profile</a>
                    <a href="employeeAllUserInfo.php">User Info</a>
                    <a href="employee.php">Loan Approval</a>
                    <a href="employeeOurBranches.php">Our Branches</a>
                    <a href="employeeLogout.php">Logout</a>
                </nav>
            </div>
        </header>

        <div>
            <p id = "welcome" name = "welcome">Hello <?=$_SESSION["name"];?> !</p>
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
    $query="select * from employee_info where emp_id='$_SESSION[name]' and phone='$cp'";
    $data=mysqli_query($conn,$query);
    $tot=mysqli_num_rows($data);
    if($tot==1)
    {
        if($up==$cup)
        {
            $query1="update employee_info set phone='$up' where emp_id='$_SESSION[name]'";
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
    $query="select * from employee_info where emp_id='$_SESSION[name]' and password='$cp'";
    $data=mysqli_query($conn,$query);
    $tot=mysqli_num_rows($data);
    if($tot==1)
    {
        if($up==$cup)
        {
            $query1="update employee_info set password='$up' where emp_id='$_SESSION[name]'";
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
?>









        
        <div class = "userInfo">
            <center><h2>My Profile</h2></center>
            <table id="myProfile">
                <?php
                    $queryToFetchData = "select * from employee_info where emp_id ='$_SESSION[name]'";
                    $data=mysqli_query($conn,$queryToFetchData);
                    $result = mysqli_fetch_assoc($data);
//                     if( strlen($result) > 0){
                        //$result = $result-> fetch_assoc();
                        $_SESSION["manager_id"] = $result["manager_id"];
                        $_SESSION["emp_id"] = $result["emp_id"];
                        $_SESSION["branch_code"] = $result["branch_code"];
                        $_SESSION["dob"] = $result["dob"];
                        $_SESSION["resi_address"] = $result["resi_address"];
                        $_SESSION["phone"] = $result["phone"];
                        $_SESSION["email"] = $result["email"];
                        $_SESSION["doj"] = $result["doj"];
                        $_SESSION["designation"] = $result["designation"];
                        $_SESSION["salary"] = $result["salary"];
                        echo("<tr>"."<td>Manager Id</td>"."<td>".$_SESSION["manager_id"]."</td>"."</tr>");
                        echo("<tr>"."<td>Employee ID</td>"."<td>".$_SESSION["emp_id"]."</td>"."</tr>");
                        echo("<tr>"."<td>Name of employee</td>"."<td>".$result["emp_name"]."</td>"."</tr>");
                        echo("<tr>"."<td>Branch Code</td>"."<td>".$_SESSION["branch_code"]."</td>"."</tr>");
                        echo("<tr>"."<td>DOB</td>"."<td>".$_SESSION["dob"]."</td>"."</tr>");
                        echo("<tr>"."<td>Residential Address</td>"."<td>".$_SESSION["resi_address"]."</td>"."</tr>");
                        echo("<tr>"."<td>Phone</td>"."<td>".$_SESSION["phone"]."</td>"."</tr>");
                        echo("<tr>"."<td>E-mail</td>"."<td style='width:200px'>".$_SESSION["email"]."</td>"."</tr>");
                        echo("<tr>"."<td>Designation</td>"."<td>".$_SESSION["designation"]."</td>"."</tr>");
                        echo("<tr>"."<td>Salary</td>"."<td>".$_SESSION["salary"]."</td>"."</tr>");
                        echo("<tr>"."<td>Date of join</td>"."<td>".$_SESSION["doj"]."</td>"."</tr>");
//                     }
                ?>
            </table>
</div>

            <br><br><br>



<table style="background-color: black;width:1202px; height:40px; margin-bottom:-3px;float:down; margin-left:-66px; ">
<tr>
    <td style="color:white; background-color: black; text-align: center;">
        Vellore Institute of Technology Chennai
    </td>
</tr></table>

    </body>
</html>
