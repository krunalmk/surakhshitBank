<html>
<head>
	<title>employee</title>

<style>

		#s
            {
                background-color: green;
                border-radius: 5px;
                border-color: green;
                font-size: 15;
                color:white;
                height:30;
                width:130;
            }

			body{
                margin: 0%;
                width: 100%;
            }

            nav > a{
                background: #00adef;
/*                 background-image: radial-gradient(#00afff 25%, #004cff 75%); */
                border: 1px solid #0000FF;
                display: inline-block;
                width: 11.35vw;
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
                width:50%;
            }

            .navigationBar{
                justify-content: center;
                height: 5%;
            }

            nav{
                margin-left: 2vw;
                margin-right: 2vw;
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
                text-align:center;
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
        <header style="font-family: Arial; font-size:18px;margin-top:0px; margin-left:-8.5px;margin-right:-0.5px; width:1145px;">
            <div class="navigationBar">
                <nav>
                    <a href="employeeAboutUs.php">About Us</a>
                    <a href="employeeSchemes.php">Schemes</a>
                    <a href="employeeHomePage.php" >Home</a>
                    <a href="employeeMyProfile.php">My Profile</a>
                    <a href="employeeAllUserInfo.php">User Info</a>
                    <a href="employee.php" style='border: 2px solid #0049B7;'>Loan Approval</a>
                    <a href="employeeOurBranches.php">Our Branches</a>
                    <a href="employeeLogout.php">Logout</a>
                </nav>
            </div>
        </header>

<?php

include("connection.php");
$query="select * from loan";
$data=mysqli_query($conn,$query);

?>


<br><br><br><br>

<table align='center' border='5px' cellpadding='20px' id='branch_table'>
<tr>
	<th>Loan ID</td>
	<th>Account No.</td>
	<th>Customer Id</td>
	<th>Name</td>
	<th>Amount</td>
	<th align='center'>Details</td>
</tr>
<?php
while($result=mysqli_fetch_assoc($data))
{
	$query1="select * from account where account_no='$result[account_no]'";
	$data1=mysqli_query($conn,$query1);
	$result1=mysqli_fetch_assoc($data1);
	if($result['status']=='PENDING')
	{
	?>
	<tr>
		<td><?php echo $result['loan_id'];?></td>
		<td><?php echo $result['account_no'];?></td>
		<td><?php echo $result1['customer_id'];?></td>
		<td><?php echo $result1['username'];?></td>
		<td><?php echo $result['amount'];?></td>
		<td><?php echo "<a href='pending.php?loan_id=$result[loan_id]'><input type='button' value='View Details' style=' background-color: #ffdb4d; border-color: #ffdb4d; border-radius: 5px; height:25px; width:100px;'></a>";?></td>
	</tr>
	<?php
	}
}

?>
</table>
        <br><br><br><br>
  <table style="background-color: black;width:1150px; height:40px; margin-bottom:-3px;float:down; margin-left:-14px; ">
<tr>
    <td style="color:white; background-color: black; text-align: center;">
        Vellore Institute of Technology Chennai
    </td>
</tr></table>


</body>
</html>