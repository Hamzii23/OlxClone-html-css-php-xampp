<?php

include 'database.php';
$catag=$_GET['catagory'];
if(isset($_POST['submit']) && !empty($_POST) && isset($_FILES['uploadfile1'])){
    $title=$_POST['adTitle'];
    $category=$catag;
    $description=$_POST['adDesc'];
    $brand=$_POST['brand'];
    $condition=$_POST['condition'];
    $price=$_POST['adPrice'];
    $location=$_POST['location'];
    $username=$_POST['Username'];
    $phone=$_POST['Phone'];
    

    $filename = $_FILES["uploadfile1"]["name"];
    $tempname = $_FILES["uploadfile1"]["tmp_name"];

    $folder1 = "images/".$filename;

    move_uploaded_file($tempname, $folder1);

    $filename2 = $_FILES["uploadfile2"]["name"];
    $tempname = $_FILES["uploadfile2"]["tmp_name"];

    $folder2 = "images/".$filename2;

    move_uploaded_file($tempname, $folder2);

    $filename3 = $_FILES["uploadfile3"]["name"];
    $tempname = $_FILES["uploadfile3"]["tmp_name"];

    $folder3 = "images/".$filename3;

    move_uploaded_file($tempname, $folder3);

    $filename4 = $_FILES["uploadfile4"]["name"];
    $tempname = $_FILES["uploadfile4"]["tmp_name"];

    $folder4 = "images/".$filename4;

    move_uploaded_file($tempname, $folder4);

    $filename5 = $_FILES["uploadfile5"]["name"];
    $tempname = $_FILES["uploadfile5"]["tmp_name"];

    $folder5 = "images/".$filename5;

    move_uploaded_file($tempname, $folder5);

    $res = $database->insert($category,$title, $description, $brand, $condition, $price, $filename, $filename2, $filename3, $filename4, $filename5, $location, $username, $phone);

        if($res){
            header('location: olx_main.php?=Successfully Inserted data');
        }
        else{

            echo "Failed to Insert Data";
         }
    

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://is3-ssl.mzstatic.com/image/thumb/Purple124/v4/38/89/9d/38899db7-6654-33c0-87c4-247647e90bd0/source/256x256bb.jpg">
    <title>Post Ad</title> 

    <link rel="stylesheet" href="Css/form.css?v=2">
</head>
<body>
  <div class="header">
    <div class="navbar">
          <img  src="https://logos-world.net/wp-content/uploads/2022/04/OLX-Logo.png" alt="Olx" width="55px" height="30px">
    </div> 
  </div>  

    
    <h3 class="post-ad">Post Your Ad</h3>

    <div class="outer-box">
        <h2>Selected Category  </h2>
        <?php
        $cat=$_GET['catagory'];
        echo "<p>$cat</p>";
        ?>

        

        <form class="main-section1" method="post" enctype="multipart/form-data">
            <h2>Include some details</h2>

            <br>
            <label class="title" for="adTitle">Ad title</label><br>
            <input type="text" name="adTitle" id="adTitle" placeholder="Enter ad title" required>

            <label class="title" for="adDesc">Ad title</label><br>
            <textarea name="adDesc" id="adDesc" cols="30" rows="10" placeholder="Enter Description" required></textarea>

            <label class="title" for="brand">Make, Brand, Type</label><br>
            <input type="text" name="brand" id="brand" placeholder="Enter Make" required>       

            <label class="title" for="brand">Condition:</label><br>
            <hr>

            <div class="condition">

                <input type="radio" id="New" name="condition" value="New">
                <label for="condition">New</label><br>

                
                <input type="radio" id="Refurbished" name="condition" value="Refurbished">
                <label for="condition">Refurbished</label><br>

                <input type="radio" id="veryold" name="condition" value="Very old">
                <label for="condition">Very old</label>

                </div>
            <br><br>
            <hr>

            <h2>Set a price</h2>

            <br>
            <label class="title" for="adPrice">Set price</label><br>
            <input type="text" name="adPrice" id="adPrice" placeholder="Enter price">

            <br>
            <hr>

            <h2>Upload photos</h2>
            
            <div class="uploadpic" >
                <div class="upload">
                    <label for="uploadfile1"><img src="icons/iconAddPhoto_noinline.svg" alt="upload"></label>
                    <input type="file" required id="uploadfile1" name="uploadfile1" accept="image/*" style="display: none; visibility: none;">
                </div>
                <div class="upload">
                    <label for="uploadfile2"><img src="icons/iconAddPhoto_noinline.svg" alt="upload"></label>
                    <input type="file" required id="uploadfile2" name="uploadfile2" accept="image/*" style="display: none; visibility: none;">
                </div>
                <div class="upload">
                    <label for="uploadfile3"><img src="icons/iconAddPhoto_noinline.svg" alt="upload"></label>
                    <input type="file" required id="uploadfile3" name="uploadfile3" accept="image/*" style="display: none; visibility: none;">
                </div>
                <div class="upload">
                    <label for="uploadfile4"><img src="icons/iconAddPhoto_noinline.svg" alt="upload"></label>
                    <input type="file" required id="uploadfile4" name="uploadfile4" accept="image/*" style="display: none; visibility: none;">
                </div>
                <div class="upload">
                    <label for="uploadfile5"><img src="icons/iconAddPhoto_noinline.svg" alt="upload"></label>
                    <input type="file" required id="uploadfile5" name="uploadfile5" accept="image/*" style="display: none; visibility: none;">
                </div>
                
            </div> 

            <br><hr>

            <h2>Select your Location</h2>

           <br> <label class="title" for="location">Select location:</label><br>

            <select name="location" id="location" required>
              <option value="Select location">Select location</option>
              <option value="Islamabad">Islamabad, Pakistan</option>
              <option value="Punjab">Punjab, Pakistan</option>
              <option value="Sindh">Sindh, Pakistan</option>
              <option value="KPK">KPK, Pakistan</option>
              <option value="Baluchistan">Baluchistan, Pakistan</option>

            </select>   

            <h2>Review Details</h2>

           <br> <label class="title" for="Userame">Your Name:</label><br>
            <input type="text" name="Username" id="Userame" placeholder="Enter your name" required>


            <h2>Let's verify your Account:</h2>

            <br><label class="title" for="Phone">Your Phone number:</label><br>
            <input type="text" name="Phone" id="Phone" placeholder="Enter your phone number" required>

            <button class="submit" name="submit">Post Now</button>
            <button class="preview">Preview details</button>
        </form>

    </div>
    
</body>
</html>