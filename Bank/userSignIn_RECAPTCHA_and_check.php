<?php
        session_start();
        include("connection.php");
        
        $cif;
        $password;
        $captcha;
        if(isset($_POST['cif'])){
          $cif=(string)$_POST['cif'];
        }
        if(isset($_POST['password'])){
          $password=$_POST['password'];
        }
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $secretKey = "6LcSs7YZAAAAABq20UiCoTuxzilIJNhBbRG60ZYn";
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        // should return JSON with success as true
        if($responseKeys["success"]) {
                if(strlen($cif) > 0 && strlen($password) > 0){
                    try{
                        $check_if_available = "select exist, name, cust_id from customer_info where cif = '$cif' and password = '$password'";
                        $result = $conn -> query($check_if_available);
                        if(!empty($result) && $result->num_rows > 0){
                            $result = $result-> fetch_assoc();
                            if($result["exist"]==1){
                                $_SESSION["cif"] = $cif;
                                $_SESSION["password"] = $password;
                                $_SESSION["name"] = $result["name"];
                                $_SESSION["cust_id"] = $result["cust_id"];
                                error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);
                                header('Location: userHomePage.php');
                            }
                            else{
                                echo("<center><p>Please enter correct information</p></center>");
                            }
                        }
                        else{
                            session_destroy();
                            header('Location: userSignIn.php');
                            echo("<center><p>Please enter correct information</p></center>");
                        }
                    }
                    catch(Exception $e){
                        echo($e);
                        session_destroy();
                        header('Location: userSignIn.php');
                        echo("<center><p>Please enter correct information</p></center>");
                    }
                }
                else{
                    echo("<p>Please fill all the text boxes</p>");
                }
        }
        else {
                echo '<h2>Failure</h2>';
        }
?>
