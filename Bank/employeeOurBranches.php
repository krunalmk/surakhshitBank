<?php
    session_start();
    include("connection.php");
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
            
             th{
                border-color:#000000;
                background-color: #00adef;
                padding: 1em;
            }
            
            td{
                border-color:#000000;
                padding: 1em;
            }
            
            tr{
                margin: 10%;
                margin: 2em;
                background-color: #00adef;
            }
            
            #branch_table{
/*                 border-collapse:collapse; */
                border-color:#000000;
                border: 1px solid black;
                padding: 1em;
                
                background-color: #abdbff;
            }
            nav >a:hover{
                border: 2px solid mediumblue;
            }

        </style>
    </head>

    <body style="background-color:#eeeeee">
        <header style="font-family: Arial; font-size:18px;margin-top:0.2px; margin-left:-6.5px;margin-right:-2.5px; width:1143px">
            <div class="navigationBar">
                <nav>
                    <a href="employeeAboutUs.php">About Us</a>
                    <a href="employeeSchemes.php">Schemes</a>
                    <a href="employeeHomePage.php">Home</a>
                    <a href="employeeMyProfile.php">My Profile</a>
                    <a href="employeeAllUserInfo.php">User Info</a>
                    <a href="employee.php">Loan Approval</a>
                    <a href="employeeOurBranches.php" style='border: 2px solid #0049B7;'>Our Branches</a>
                    <a href="employeeLogout.php">Logout</a>
                </nav>
            </div>
        </header>

        <div>
            <p id = "welcome" name = "welcome">Hello <?=$_SESSION["name"];?> !</p>
            <center><p style="font-family: Arial;font-size:17.5px;">View the contact details and other information in a single place</p></center>
            <table id = "branch_table" align = "center">
                <th>Branch code</th>
                <th>IFSC</th>
                <th>Manager</th>
                <th>Address</th>
                <th>Contact</th>
                
                <?php
                    $branch_details = "select * from our_branches";
                    $result = $conn -> query($branch_details);
                    if(!empty($result) && $result->num_rows > 0){
                        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                            echo("<tr>");
                                echo("<td>".$row['branch_code']."</td>");
                                echo("<td>".$row['ifsc']."</td>");
                                echo("<td>".$row['emp_id']."</td>");
                                echo("<td>"."Addr:".$row['address']."<br>"."Landmark:".$row["landmark"]."</td>");
                                echo("<td>"."Email:".$row['email']."<br>"."Phone:".$row['phone']."</td>");
                            echo("</tr>");
                        }
                    }
                    else{
                        echo("Error while connecting");
                    }
                ?>
            </table>
        </div>
        <br><br><br>
  <table style="background-color: black;width:1150px; height:40px; margin-bottom:-3px;float:down; margin-left:-14px; ">
<tr>
    <td style="color:white; background-color: black; text-align: center;">
        Vellore Institute of Technology Chennai
    </td>
</tr></table>
    </body>
</html>

