<?php
    session_start();
    include('connection.php');
    $acc_noSelected=$_GET['acc_no'];
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
            
            .userInfo{
                border: 1px solid black;
                width: 50%;
                margin-top: 7%;
                margin-left: 25%;
                margin-bottom: 10%;
                background-color: #abdbff;
            }
            
            #myProfile{
                margin: 4%;
            }
            
            tr{
                background-color: #00adef;
            }
            
            td{
                padding: 2%;
                width: 350px;
            }
            
            #back{
                background-color: #000080;
                color: white;
                padding: 5px;
                position: absolute;
                border-radius: 5px;
                margin-top: 2%;
                margin-left: 23%;
                margin-bottom: 5%;
            }
            nav >a:hover{
                border: 2px solid mediumblue;
            }
        </style>
    </head>

    <script>
        
        function goBack() {
            window.history.go(-1);
        }
</script>
    </script>
    
    <body style="background-color:#eeeeee">
        <header style="font-family: Arial; font-size:18px;margin-top:0.2px; margin-left:-6.5px;margin-right:-2.5px; width:1143px">
            <div class="navigationBar">
                <nav>
                    <a href="employeeAboutUs.php">About Us</a>
                    <a href="employeeSchemes.php">Schemes</a>
                    <a href="employeeHomePage.php">Home</a>
                    <a href="employeeMyProfile.php">My Profile</a>
                    <a href="employeeAllUserInfo.php" style='border: 2px solid #0049B7;'>User Info</a>
                    <a href="employee.php">Loan Approval</a>
                    <a href="employeeOurBranches.php">Our Branches</a>
                    <a href="employeeLogout.php">Logout</a>
                </nav>
            </div>
        </header>

        
        <div class = "userInfo">
            <center><h2>My Profile</h2></center>
            <table id="myProfile">
                <?php
                    $query = "select * from account where account_no ='$_GET[acc_no]'";
                    $data = mysqli_query($conn,$query);
                    $result=mysqli_fetch_assoc($data);
                    $query1 = "select * from accounts where account_no = '$_GET[acc_no]'";
                    $data1 = mysqli_query($conn,$query1);
                    $result1=mysqli_fetch_assoc($data1);
                    $_SESSION["acc_no"] = $result["account_no"];
                    $_SESSION["cif"] = $result["customer_id"];
                    $_SESSION["branch_code"] = $result["IFSC_code"];
                    $_SESSION["dob"] = $result1["DOB"];
                    $_SESSION["resi_address"] = $result1["address"];
                    $_SESSION["phone"] = $result1["contact"];
                    $_SESSION["email"] = $result1["emailid"];
                    $_SESSION["date_of_creation"] = $result["acc_open_date"];
                    echo("<tr>"."<td>Account number</td>"."<td>".$_SESSION["acc_no"]."</td>"."</tr>");
                    echo("<tr>"."<td>CIF</td>"."<td>".$_SESSION["cif"]."</td>"."</tr>");
                    echo("<tr>"."<td>Branch Code</td>"."<td>".$_SESSION["branch_code"]."</td>"."</tr>");
                    echo("<tr>"."<td>DOB</td>"."<td>".$_SESSION["dob"]."</td>"."</tr>");
                    echo("<tr>"."<td>Residential Address</td>"."<td>".$_SESSION["resi_address"]."</td>"."</tr>");
                    echo("<tr>"."<td>Phone</td>"."<td>".$_SESSION["phone"]."</td>"."</tr>");
                    echo("<tr>"."<td>E-mail</td>"."<td>".$_SESSION["email"]."</td>"."</tr>");
                    echo("<tr>"."<td>Date & time of account creation</td>"."<td>".$_SESSION["date_of_creation"]."</td>"."</tr>");
                ?>
            </table>
            <button id = "back" onclick = "goBack()" >Go Back</button>
        </div>
        <br><br>
  <table style="background-color: black;width:1150px; height:40px; margin-bottom:-3px;float:down; margin-left:-14px; ">
<tr>
    <td style="color:white; background-color: black; text-align: center;">
        Vellore Institute of Technology Chennai
    </td>
</tr></table>
    </body>
</html>