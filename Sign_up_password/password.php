<?php
require_once "../connection.php";
session_start();
$email= $_SESSION['email'];
if(isset($_POST['submit']) && !empty($_POST))
{
    $password=$_POST['password'];
    $re_password=$_POST['re_password'];
    if($password == $re_password)
    {
        $query="INSERT INTO `olx_signup` (`email`, `password`) VALUES ('".$email."', '".$password."')";     
         $result=mysqli_query($conn,$query);
         $_SESSION['email']=$email;
         header("Location: ../olx_main.php");
        exit();
    }
    else{
        $sec=1;
        header("Refresh:$sec");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Sign_up_password/passstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../passtext.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="mainContainer">
        <div class="icondiv">
           <a href=""><span class="emailcloss" onclick="close_window()">&#9587;</span></a> 
        </div>
        <div class="secondconatier">
            <div class="imageText">
                <img src="https://www.arabadonline.com/uploads/articles_uploads/olx_logo.png" alt="">
            </div>
            <span class="textspan">Create a password to login faster next <br> time </span>
            <div class="thirddiv">
                <span class="text1span"> You are creating a password for 
                    <strong id="passtext" class="emailtext"> <br> </strong>
                    This will help login faster next time</span>
                <div class="fourdiv">
                    <div class="fifthDiv">
                        <form action="../Sign_up_password/password.php" method="post" class="passform">
                            <div class="pass_text_div">
                                <div class="pass_div">
                                <input type="password" autocomplete="nope" placeholder="New Password" class="passinput" required name="password">
                                </div>
                                <div class="error-span_class">
                                        <span class="span_error1">
                                            <span class="span_error2">This field is mandatory</span>
                                        </span>
                                </div>
                                <div class="pass_div">
                                    <input type="password" autocomplete="nope" placeholder="Confirm New Password" class="Re_passinput" required name="re_password">
                                    </div>
                                    <div class="error-span_class">
                                            <span class="span_error1">
                                                <span class="span_error2">This field is mandatory</span>
                                            </span>
                                    </div>
                                    <button class="button" name="submit">
                                        <span>Create Password</span>
                                    </button>
                                    <div class="last_span_class">
                                        <span>
                                            This site is protected by reCAPTCHA and the Google
                                            <a href=""> Privacy Policy</a>
                                            and
                                            <a href=""> Terms of Service</a>
                                            apply
                                        </span>

                                    </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
    </div>
    <script>
        function close_window() {
    close();
}

    </script>
</body>
</html>