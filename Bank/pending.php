<?php 
include("connection.php");

$l_id=$_GET['loan_id'];
//echo $l_id;

?>
<html>
<head>
	<title>Approve / Disapprove</title>
<style>
	#c2
	{
		visibility: hidden;
	}
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
    	#s1
            {
                background-color: red;
                border-radius: 5px;
                border-color: red;
                font-size: 15;
                color:white;
                height:30;
                width:130;
            }
           #b1
            {
                background-color: purple;
                border-radius: 5px;
                border-color: purple;
                font-size: 15;
                color:white;
                height:30;
                width:240;
            }
            #b2
            {
                background-color: blue;
                border-radius: 5px;
                border-color: blue;
                font-size: 15;
                color:white;
                height:30;
                width:130;
            }
            #ch
            {
                background-color: darkorange;
                border-radius: 5px;
                border-color: darkorange;
                font-size: 15;
                color:white;
                height:30;
                width:90;
            }
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
			#ll
			{
				background-color:#eeeeee;
			}
			nav >a:hover{
                border: 2px solid mediumblue;
            }
</style>

<script>

function check1()
{
	document.getElementById('c2').style.visibility="visible";
	//alert("Hello");
}

</script>
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

		<br><br><br>

<?php

$query="select * from loan where loan_id='$l_id'";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
?>


<table align='center' border='4px' cellpadding='10px' id='branch_table'>
	<tr>
		<th>Loan Id</td>
		<td><?php echo $result['loan_id'];?></td></tr>
	<tr>
		<th>Accoiunt No</td>
		<td><?php echo $result['account_no'];?></td></tr>
	<tr>
		<th>Customer Id</td>
		<td><?php echo $result['c_id'];?></td></tr>
	<tr>
		<th>Amount</td>
		<td><?php echo $result['amount'];?></td></tr>
	<tr>
		<th>Periond in months</td>
		<td><?php echo $result['period_months'];?></td></tr>
	<tr>
		<td>Value Date</td>
		<td><?php echo $result['Value_date'];?></td></tr>
	<tr>
		<th>Loan Type</td>
		<td><?php echo $result['loan_type'];?></td></tr>
	<tr>
		<td>Monthly Salary</td>
		<td><?php echo $result['monthly_salary'];?></td></tr>
	<tr>
		<th>Interest Rate</td>
		<td><?php echo $result['interest_rate'];?></td></tr>
	<tr>
		<th>Income Proof 1</td>
		<td><?php echo "<img src='$result[file_1]' height=200 width=300";?></td></tr>
	<tr>
		<th>Income Proof 2</td>
		<td><?php echo "<img src='$result[file_2]' height=200 width=300";?></td></tr>
	<tr>
		<th>Income Proof 3</td>
		<td><?php echo "<img src='$result[file_3]' height=200 width=300";?></td></tr>
	</tr>
	<tr>
		<th>EMI</td>
		<td><?php echo $result['EMI'];?></td></tr>
	</tr>
	<tr>
		<th>Total Amount</td>
		<td><?php echo $result['Total Amount'];?></td></tr>
	</tr>
	<tr>
		<th>Status</td>
		<td><?php echo $result['status'];?></td></tr>
	</tr>

</table>
<br>
<table align='center' style='background-color:#eeeeee' id='ll'>
	<tr>
		<td style='background-color:#eeeeee'><?php echo "<a href='approve_loan.php?loan_id=$l_id'><input type='button' value='Approve' id='s'></a>";?></td>
		<td style='background-color:#eeeeee'><?php echo "<a href='disapprove_loan.php?loan_id=$l_id'><input type='button' value='Disapprove' id='s1'></a>";?></td>
	</tr>
</table>
<br>

<center><button onclick="check1()" id='b1'>Check whether eleigible or not</button></center>
<br>
<table align='center' id='c2'>
	<tr><td style='background-color:#eeeeee'>
<form method='POST'>
	<input type='int' placeholder='EMI' name='emi'>
	<input type='int' placeholder='monthly_salary' name='monthly_salary'>
	<input type='submit' value='Check' name='chk' id='ch'>
</form>
</td></tr></table>




<?php

if(isset($_POST['chk']))
{
	$emi=$_POST['emi'];
	$monthly_salary=$_POST['monthly_salary'];
	if($emi<=($monthly_salary/2))
	{
		echo "<h3 align='center'>Eligible</h3>";
	}
	else
	{
		echo "<h3 align='center'>Not Eligible</h3>";
	}
}

?>
<br>
<center><a href='employee.php'><input type='button' value='Back' id='b2'></a></center>

<br><br><br><br>
  <table style="background-color: black;width:1150px; height:40px; margin-bottom:-3px;float:down; margin-left:-14px; ">
<tr>
    <td style="color:white; background-color: black; text-align: center;">
        Vellore Institute of Technology Chennai
    </td>
</tr></table>
</body>
</html>