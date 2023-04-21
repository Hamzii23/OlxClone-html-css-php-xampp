<?php
require_once('database.php');
$res = $database->read1();
$resu = $database->read2();
$resul = $database->read3();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Css/main_olx.css?v=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="icon" type="image/x-icon" href="https://is3-ssl.mzstatic.com/image/thumb/Purple124/v4/38/89/9d/38899db7-6654-33c0-87c4-247647e90bd0/source/256x256bb.jpg">
	<title>OLX Clone</title>
</head>
<body>



<!-- =============================== * navbar * ==================================== -->
 
<div class="header">

 <div class="navbar">
 	 <div class="nav">
        <img  src="https://logos-world.net/wp-content/uploads/2022/04/OLX-Logo.png" alt="Olx" width="25px" height="17px">
 
        <a id="mot" href="#MOTOR"><img class="img" src="https://cdn-icons-png.flaticon.com/512/2962/2962303.png" width="25" height="15">&nbsp; MOTORS</a>
  
 
        <a id="prop" href="#PROPERTY"><img class="img" src="https://img.icons8.com/external-parzival-1997-detailed-outline-parzival-1997/2x/external-property-financial-advisor-parzival-1997-detailed-outline-parzival-1997.png" width="25" height="15">&nbsp;PROPERTY</a>
  
     </div>
   <div class="nav1">
 	<img src="https://logos-world.net/wp-content/uploads/2022/04/OLX-Logo.png">

 	<div class="country_select" id="country">
 		<div class="select">
 			<p id="text">Select Your Country</p>
 			<i class="fa-solid fa-angle-down" id="moving"></i>
 		</div>
 		
 		<ul class="option_box" id="list">
 			<li class="option" onclick="myfunction('USA')">
 			<i class="fa-solid fa-location-dot"></i> 
 			<p>USA</p>
 			</li>
 			<li class="option" onclick="myfunction('Canada')">
 			<i class="fa-solid fa-location-dot"></i> 
 			<p>Canada</p>
 			</li>
 			<li class="option" onclick="myfunction('Pakistan')">
 			<i class="fa-solid fa-location-dot"></i> 
 			<p>Pakistan</p>
 			</li>
 			<li class="option" onclick="myfunction('India')">
 			<i class="fa-solid fa-location-dot"></i> 
 			<p>India</p>
 			</li>
 			<li class="option" onclick="myfunction('Iran')">
 			<i class="fa-solid fa-location-dot"></i> 
 			<p>Iran</p>
 			</li>

 		</ul>

 	</div>


 		<div class="searchbox">
 			<input type="text" class="searchclass" id="searchid" placeholder="Find Cars, Mobile Phone and more...">
 			<p> <i class="fa-solid fa-magnifying-glass"></i> </p>

 		</div>


		<a id="login" href="LOGIN_PAGE/index.html">Login</a>


 		<div class="selling">
 			<a href="LOGIN_PAGE/index.html"><button>
 				<i class="fa-solid fa-plus"></i>
 				<p>SELL</p>
 			</button>
 		</a>
 		</div>
 	</div>
 </div>	
	
</div>	


<!-- =============================== * Category * ==================================== -->

<div class="two">
<div class="twod">
 
    

    <a class="catalog" href="" id="Catagory">All Catagories</a>
    <a class="catalog" id="mobile" href="#Mobiles">Mobiles</a>&nbsp;&nbsp;&nbsp;
    <a class="catalog" id="cars" href="#Vehicles">Vehicles</a>&nbsp;&nbsp;&nbsp;
    <a class="catalog" id="property" href="#Property">Property</a>&nbsp;&nbsp;&nbsp;
    <a class="catalog" id="business" href="#Business">Business</a>&nbsp;&nbsp;&nbsp;
    <a class="catalog" id="furniture" href="#Furnitures">Furniture</a>&nbsp;&nbsp;&nbsp;
    <a class="catalog" id="Books" href="#Books">Books</a>&nbsp;&nbsp;&nbsp;
    <a class="catalog" id="animals" href="#Animals">Animals</a>

  
</div>
</div>

<!-- =============================== * Add 1 * ==================================== -->

<div class="addimg" id="addimgid">
	<img src="https://images.olx.com.pk/thumbnails/310378076-800x600.webp">
	<i class="fa-regular fa-rectangle-xmark" id="adcross"></i>

</div>

<!-- =============================== * Selected Catagory * ==================================== -->



<!-- =============================== * Products * ==================================== -->

<div class="product" id="product">

    <div class="first_row">
<?php
	while($r=mysqli_fetch_assoc($resul)){ ?>
		<div class="box">	
			<a href="products.php?id=<?php echo $r['id'];?>">
			<img src="images/<?=$r['image1']?>">
			<h2>RS <?php echo $r['price']; ?></h2>
			<p><?php echo $r['title']; ?></p>
			<div class="adress_data">
				<p><?php echo $r['location']; ?></p>
				<p>Today</p>
			</div>
		</div>
	</a>
<?php } ?>	

  </div>


  <div class="first_row">
<?php
	while($r=mysqli_fetch_assoc($resu)){ ?>
		<div class="box">	
			<a href="products.php?id=<?php echo $r['id'];?>">
			<img src="images/<?=$r['image1']?>">
			<h2>RS <?php echo $r['price']; ?></h2>
			<p><?php echo $r['title']; ?></p>
			<div class="adress_data">
				<p><?php echo $r['location']; ?></p>
				<p>Today</p>
			</div>
		</div>
	</a>
<?php } ?>	

  </div>





</div>




<!-- =============================== * Add 2 * ==================================== -->

<div class="addimg" id="addimgid2">
	<img src="Ads/ad2.jpg" >
	<i class="fa-regular fa-rectangle-xmark" id="adcross2"></i>
</div>



<!-- =============================== * Download * ==================================== -->

<div class="downloadapp">
	<div class="download">
		<img src="Ads/footar.jpg" class="images">
		<div class="text">
			<h1>TRY THE OLX APP</h1>
			<p>Buy, sell and find just about anything using <br> the app on your mobile.</p>
		</div>
		<div class="downloadstore">
			<p>GET YOUR APP TODAY</p>
			<img src="Ads/appstore.png">
			<img src="Ads/googlestore.png">
			<img src="Ads/appgallery.jpeg">
		</div>
	</div>
	
</div>

<!-- =============================== * footer * ==================================== -->

<div class="mainfooter">
	<div class="footer">
		<div class="footerbox">
			<h2>POPULAR CATEGORIES</h2>
			<p>Cars</p>
			<p>Flats for rent</p>
			<p>Mobile Phones</p>
			<p>Jobs</p>
		</div>
		<div class="footerbox">
			<h2>TRENDING SEARCHES</h2>
			<p>Bikes</p>
			<p>Watches</p>
			<p>Books</p>
			<p>Dogs</p>
		</div>
		<div class="footerbox">
			<h2>ABOUT US</h2>
			<p>About EMPG</p>
			<p>OLX Blog</p>
			<p>Contact Us</p>
			<p>OLX for Businesses</p>
		</div>
		<div class="footerbox">
			<h2>OLX</h2>
			<p>Help</p>
			<p>Sitemap</p>
			<p>Term of uses</p>
			<p>Privacy policy</p>
		</div>
		<div class="footerbox">
			<h2>Follow us</h2>
			<i class="fa-brands fa-facebook"></i>
			<i class="fa-brands fa-twitter"></i>
			<i class="fa-brands fa-youtube"></i>
			<i class="fa-brands fa-instagram"></i>
			<br><br><br>
			<img src="Ads/appstore.png">
			<img src="Ads/googlestore.png">
			<img src="Ads/appgallery.jpeg">
		</div>
	</div>
</div>



<!-- =============================== * script * ==================================== -->



<script language="JavaScript" src="JS/olx.js"></script>

	



</body>
</html>