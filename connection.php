<?php
$serverName='localhost';
$username="root";
$password="";
$database="olx";
$conn=mysqli_connect($serverName,$username,$password,$database);
if(!$conn)
{
    die("Unable to connect to $conn");
}
?>