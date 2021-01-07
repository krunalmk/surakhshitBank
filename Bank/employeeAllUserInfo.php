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
            
            .allUser{
                width: 50%;
                margin-left: 30%;
                background-color: #abdbff;
            }

            #userInfos{
                width: 100%;
                border: 1px solid black;
            }
            
            #buttonForDetails{
                background-color: #000080;
                color: white;
                border-color: blue; 
                border-radius: 5px; 
                height:25px; 
                width:100px;'
            }
            nav >a:hover{
                border: 2px solid mediumblue;
            }
            td, th{
                background-color: #00adef;
                padding: 10px;
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
                    <a href="employeeAllUserInfo.php" style='border: 2px solid #0049B7;'>User Info</a>
                    <a href="employee.php">Loan Approval</a>
                    <a href="employeeOurBranches.php">Our Branches</a>
                    <a href="employeeLogout.php">Logout</a>
                </nav>
            </div>
        </header>

        <div>
            <p id = "welcome" name = "welcome">Hello <?=$_SESSION["name"];?> !</p>
        </div>
        
        <div class = "allUser">
            <table id="userInfos">
                <tr>
                <th>Account No</th>
                <th>Name</th>
                <th>Email id</th>
                <th>View Info</th>
                </tr>
                <?php
                
                    $getAllUserQuery ='select * from account';
                    
                    $data1 = mysqli_query($conn,$getAllUserQuery);
                   
                    while($result = mysqli_fetch_assoc($data1))
                    {
                        $Query ="select * from accounts where account_no='$result[account_no]'";
                        $data = mysqli_query($conn,$Query);
                        $r=mysqli_fetch_assoc($data);
                        ?>
                            <tr>
                                <td><?php echo "$result[account_no]"?></td>
                                <td><?php echo "$r[firstname]";?></td>
                                <td><?php echo "$r[emailid]";?></td>
                                <td align='center'><?php echo "<a href='eachUserClick.php?acc_no=$result[account_no]'><input  type='button' value='View Details' id='buttonForDetails' ></a><br>";?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
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