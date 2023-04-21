<?php
require_once "../connection.php";
session_start();
$id=$_SESSION['id'];
$query="SELECT * FROM olx_signup WHERE id='$id'";
        $passresult=mysqli_query($conn,$query);
        $row = mysqli_fetch_array($passresult);
       

        if(isset($_POST['submit']))
        {
        $password=$_POST['password'];
        if($password==$row['password']){
            $_SESSION['email']=$row['email'];
            header("Location: ../olx_main.php");
        exit();
        }
        else{
            $error="Your password is incorrect";
        }
    }       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Login_password/passstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <span class="textspan">Enter Your Password </span>
            <div class="thirddiv">
                <span class="text1span"> Welcome back
                
                <strong class="emailtext"> 
                    <br> </strong></span>


                <div class="fourdiv">
                    <div class="fifthDiv">
                        <form action="../Login_password/password.php" method="post" class="passform">
                            <div class="pass_text_div">
                                <div class="pass_div">
                                <input type="password" autocomplete="nope" placeholder="Password" name="password" class="passinput" required>
                                </div>
                                <div class="error-span_class">
                                        <span class="span_error1">
                                            <span class="span_error2" id="demo" onclick="myfunction"><?php echo "$error" ?></span>
                                        </span>
                                </div>
                                    <button class="button" name="submit">
                                        <span>LOG IN</span>
                                    </button>
                                    <div class="last_span_class">
                                        <a class="forgetpassword" href="../forget_password/forget_pass.php?<?php $_SESSION['id']=$id?>">FORGET YOUR PASSWORD</a>
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