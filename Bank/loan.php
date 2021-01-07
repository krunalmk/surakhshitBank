<?php
include("connection.php");
session_start();
//echo "$_SESSION[username]";
?>
<html>
<head>
    <title>Loan</title>
    <style>
                    input[type=text]:focus {
  background-color: black;
  color:white;
  
}
            input[type=int]:focus {
  background-color: black;
  color:white;

}
      input[type=text],input[type=int],input[type=email]
      {
        width: 70%;
        padding: 4px 4px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type=text]:focus,input[type=int]:focus
    {
        border-color:black;
    }
        td#t1
        {
            background-color:dodgerblue;
            color:white;
            height:40px;
        }
        td#t1:hover
        {
            background-color: mediumblue;
        }
        a#w,a#o:link
        {
            color:black;
            text-decoration:none;
        }
        a#w,a#o:visited
        {
            color:black;
            text-decoration:none;
        }
        a#w,a#o:hover
        {
            color:black;
            text-decoration:none;
        }
        a#w,a#o:active
        {
            color:black;
            text-decoration:none;
        }

        #wo
        {
            font-size: 16px;
            padding: 10px;
            background-color: white;
            color: black;
            border: solid 1px white;
            margin: auto;
            width:100px;
            box-shadow:0px 8px 16px 0px rgba(0,0,0,0.8);
        }
        #t11
            {
                background-color: #ffdb4d;
                font-size: 18;
                border-radius: 15px;
                font-weight: bold;
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
            nav >a:hover{
                border: 2px solid mediumblue;
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
                height: 11.3%;
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
                height:60px;
            }
    </style>
    <script>
        function wbank()
        {
            document.getElementById('wo').style.display='block';
        }
        function obank()
        {
            document.getElementById('wo').style.display='none';
        }

    </script>
</head>
<body style='background-color:#eeeeee'>
<header style="margin-top:-8px; margin-left:-8px;margin-right:-8px;">
            <div class="navigationBar">
                <nav>
                    <a href="userAboutUs.php">About Us</a>
                    <a href="userHomePage.php">My Account</a>
                    <a href="wbank.php">Fund Transfer</a>
                    <a href="FD.php">Fixed Deposit</a>
                    <a href="loan.php"  style='border: 2px solid #0049B7;'>Loan</a>
                    <a href="insurance.php">Insurance</a>
                    <a href="userOurBranches.php">Our Branches</a>
                    <a href="logout.php">Logout</a>
                </nav>
            </div>
        </header>
    
    <?php

    $query="select * from account where account_no=$_SESSION[accountno]";
    $data=mysqli_query($conn,$query);
    $result=mysqli_fetch_assoc($data);
    $a=uniqid();
    //echo $a;
    ?><br>
    <center><h2>Loan Application</h2></center>
    <form method='POST' enctype="multipart/form-data">
        <table align='center' cellpadding=20px id='t11'>
            <tr>
                <td>Account No</td>
                <td><?php echo "$_SESSION[accountno]";?></td>
            </tr>
            <tr>
                <td>Customer Id</td>
                <td><?php echo $result['customer_id'];?></td>
            </tr>
            <tr>
                <td>Term</td>
                <td>
                    <select name='abc'>
                        <option>---Select Term---</option>
                        <option value=6>6 months</option>
                        <option value=12>1 year</option>
                        <option value=24>2 years</option>
                        <option value=36>3 years</option>
                        <option value=48>4 years</option>
                        <option value=60>5 years</option>
                        <option value=120>10 years</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Loan Amount</td>
                <td><input type='int' name='la' required></td>
            </tr>
            <tr>
                <td>Value Date</td>
                <td><?php echo date('d F Y');?></td>
            </tr>
            <tr>
                <td>Loan Type</td>
                <td>
                    <select name='lt'>
                        <option>---Select Loan type---</option>
                        <option value='Car'>Car</option>
                        <option value='Home'>Home</option>
                        <option value='Education'>Education</option>
                        <option value='Others'>Others</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Proof of income 1</td>
                <td><input type="file" name="upload_file_1"></td>
            </tr>
            <tr>
                <td>Proof of income 2</td>
                <td><input type="file" name="upload_file_2"></td>
            </tr>
            <tr>
                <td>Proof of income 3</td>
                <td><input type="file" name="upload_file_3"></td>
            </tr>
            <tr>
                <td>Monthly Income</td>
                <td><input type='int' name='mi' required></td>
            </tr>
            <tr>
                <td>Rate of interest</td>
                <td>12 %</td>
            </tr>
            <tr>
                <td colspan='2' align='center'><center><input id='s' type='submit' name='sub' value='Apply for Loan'></center></td></tr>
        </table>
        
    </form>

    <br><br>
  <table style="background-color: black;width:1142.99px; height:40px; margin-bottom:-16px; margin-left:-14px; ">
<tr>
    <td style="color:white; text-align: center;">
        Vellore Institute of Technology Chennai
    </td>
</tr></table>

    <div id="txt"></div>
</body>
</html>

<?php

if(isset($_POST['sub']))
{
    $term=$_POST['abc'];
    $la=$_POST['la'];
    $mi=$_POST['mi'];
    $lt=$_POST['lt'];

    $filename_1=$_FILES["upload_file_1"]["name"];
    $tempname_1=$_FILES["upload_file_1"]["tmp_name"];
    $folder_1="gallery_1/".$filename_1;
    move_uploaded_file($tempname_1,$folder_1);

    $filename_2=$_FILES["upload_file_2"]["name"];
    $tempname_2=$_FILES["upload_file_2"]["tmp_name"];
    $folder_2="gallery_2/".$filename_2;
    move_uploaded_file($tempname_2,$folder_2);

    $filename_3=$_FILES["upload_file_3"]["name"];
    $tempname_3=$_FILES["upload_file_3"]["tmp_name"];
    $folder_3="gallery_3/".$filename_3;
    move_uploaded_file($tempname_3,$folder_3);

    if($term!='' and $la!='')
    {
        //echo $lt;
        $query1="insert into loan values ('$a','$_SESSION[accountno]','$result[customer_id]',$la,$term,CURRENT_TIMESTAMP,'$lt',$mi,12,'$folder_1','$folder_2','$folder_3',($la+($la*0.12*$term/12))/$term,($la+($la*0.12*$term/12)),'PENDING')";
        $data1=mysqli_query($conn,$query1);
        if($data1)
        {
            ?><script>alert("Your application has been successfully recorded");</script><?php
            echo "<center>Loan Id : $a</center>";
        }
        else
        {
            ?><script>alert("Failed to apply for the Loan");</script><?php
        }
    }
}

?>
