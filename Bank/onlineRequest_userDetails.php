 <?php 
    session_start();
?>
 <!DOCTYPE html>
 <html>
    <script src='https://www.google.com/recaptcha/api.js' async defer ></script>
    <script>
    
    </script>
    <head>
        <title>User details</title>
    </head>
    
<!--    <style>
        label {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        
    </style>-->
    
    <body>
        <div>
            <h1><strong><u>Online Request</u></strong></h1>
            <h2><strong>User details</strong><br>
<!--             <center> -->
                <div style='margin-left:35%;'>
                <form action="onlineRequest_userDetails_reCAPTCHA.php" method="post">
                    <div>
                        <label for = "cif" >CIF Number:</label>
                        <input type="tel" name = "cif" id = "cif" maxlength = "10" required = "true">
                    </div>
                    <div>
                        <label for = "email" >E-mail:</label>
                        <input type="text" name = "email" id = "email">
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LcSs7YZAAAAAObcGwo7jICW37-srud1Qczmgi6f"></div>
                    
                    <input type = "submit" name = "submit" id = "submit"></br>
                </form>
                </div>
<!--             </center> -->
        </div>
    </body>
</html>
