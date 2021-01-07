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
                width: 11.5vw;
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
                height: 5%;
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
                padding: 5px;
                margin-left: 22%;
                position: absolute;
                border-color: blue; 
                border-radius: 5px; 
                height:25px; 
                width:100px;'
            }
            
            td, th{
                background-color: #00adef;
                padding: 10px;
            }
        </style>
    </head>

    <body>
        <header>
            <div class="navigationBar">
                <nav>
                    <a class="logo" href="employeeHomePage.php" ><img id="logoImg" src="https://s3.ap-southeast-1.amazonaws.com/images.deccanchronicle.com/dc-Cover-279rad849ff1eu06cm9o9fira7-20161214130035.Medi.jpeg" height= 27></a>
                    <a href="employeeAboutUs.php">About Us</a>
                    <a href="employeeHomePage.php">Home</a>
                    <a href="employeeMyProfile.php">My Profile</a>
                    <a href="">Loan Approval</a>
                    <a href="employeeAllUserInfo.php">All user info</a>
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
                <th>S.No</th>
                <th>User Info</th>
                <?php
                
                    $getAllUserQuery ='select acc_no, name, email from customer_info';
                    $result = $conn -> query($getAllUserQuery);
//                     $result = $result-> fetch_assoc();
                    $sno = 1;
//                     while($row = ($result)->fetch_assoc()){
//                         print_r($row);
//                     }
                    while($row = ($result)->fetch_assoc()){
                        echo("<tr><td>$sno</td><td>Account no.: ".$row['acc_no']." <br>Name:". $row['name']);
                        echo ("<a href='eachUserClick.php?acc_no=".$row['acc_no']."' ><input id = 'buttonForDetails' type='button' value='View Details' ></a><br>");
                        echo("Email: ".$row['email']);
                        echo("</td></tr>");
                        $sno += 1;
                    }
                ?>
            </table>
        </div>

    </body>
</html>