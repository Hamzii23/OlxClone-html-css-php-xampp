<?php
require_once "../connection.php";
session_start();
if(isset($_POST['submit']) )
{
    $email=$_POST["email"];
    $query="SELECT * FROM olx_signup where email='$email'";
    $duplicated=mysqli_query($conn,$query);
    if(mysqli_num_rows($duplicated)>0)
    {
    $query="SELECT id from olx_signup where email='$email'" ;
    $Emailresult=mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($Emailresult)) {
        $id= $row['id']; 
        $_SESSION['id']=$id;
        header("Location: ../Login_password/password.php");
        exit();
    }
    
    } 
    else
    {
        $_SESSION['email']=$email;
        header("Location: ../Sign_up_password/password.php");
        exit();
    }
    }
?>