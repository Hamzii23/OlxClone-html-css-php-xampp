<?php
require_once('database.php');
$id=$_GET['id'];
$res=$database->read($id);
$r=mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="Css/product_olx.css?v=2">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="icon" type="image/x-icon" href="https://is3-ssl.mzstatic.com/image/thumb/Purple124/v4/38/89/9d/38899db7-6654-33c0-87c4-247647e90bd0/source/256x256bb.jpg">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
	<title>Product</title>
</head>
<body>

<!-- =============================== * navbar * ==================================== -->
 
<div class="header">

 <div class="navbar">
 	 <div class="nav">
        <img  src="https://logos-world.net/wp-content/uploads/2022/04/OLX-Logo.png" alt="Olx" width="25px" height="20px">
 
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


 		<div class="message">
 			<i class="fa-regular fa-comment"></i>
 		</div>

 		<div class="message">
 			<i class="fa-regular fa-bell"></i>
 		</div>


 		<div class="logo">
 			<div class="profile" id="profileid">
 				<img src="https://i.pinimg.com/736x/25/78/61/25786134576ce0344893b33a051160b1.jpg">
 			</div>
 			<div class="dropdown" id="dropdownid">
 				<div class="nameimg">
 					<img src="https://i.pinimg.com/736x/25/78/61/25786134576ce0344893b33a051160b1.jpg">
 					<p>Your Name</p>			
 				</div>
 				
 				<ul>
 					<li>
 						<i class="fa-solid fa-user"></i>
 						<p>My Account</p>
 					</li>
 					<li>
 						<i class="fa-solid fa-box"></i>
 						<p>My Order</p>
 					</li>
 					<hr>
 					<li>
 						<i class="fa-solid fa-circle-question"></i>
 						<p>Help</p>
 					</li>
 					<li>
 						<i class="fa-solid fa-gear"></i>
 						<p>Setting</p>
 					</li>
 					<hr>
 					<li>
 						<i class="fa-solid fa-arrow-right-to-bracket"></i>
 						<a href="olx_login.php"><p>Logout</p></a>
 					</li>
 				</ul>
 			</div>
 		</div>


 		<div class="selling">
 		<a href="category.php">
 			<button>
 				<i class="fa-solid fa-plus"></i>
 				<p>SELL</p>
 			</button>
 		</a>
 		</div>
 	</div>
 </div>	
	
</div>	


<!-- =============================== * Add 1 * ==================================== -->

<div class="addimg" id="addimgid2">
	<img src="Ads/ad2.jpg" >
	<i class="fa-regular fa-rectangle-xmark" id="adcross2"></i>
</div>


<!-- =============================== * product detail * ==================================== -->

<div class="product_image">
	 <div class="product_description">
			<div class="swiper">
 
  			<div class="swiper-wrapper">
    
   			<div class="swiper-slide"><img src="images/<?=$r['image2']?>" ></div>
    			 <div class="swiper-slide"><img src="images/<?=$r['image3']?>" ></div>
    			 <div class="swiper-slide"><img src="images/<?=$r['image4']?>" ></div>
    			 <div class="swiper-slide"><img src="images/<?=$r['image5']?>" ></div>

  			</div>
 
  			<div class="swiper-pagination"></div>

  
  			<div class="swiper-button-prev" id="prev"></div>
 			  <div class="swiper-button-next" id="next"></div>

		</div>

				<div class="description">
					<h3>Description</h3>
					<p><?php echo $r['description']; ?></p>
					<br>
					<hr>
					<h3>Condition</h3>
					<p><?php echo $r['conditions']; ?></p>
				</div>

	 </div>

	 	 <div class="product_details">
	 	 		<div class="box">
	 	 				<div class="price">
	 	 						<h3>Rs <?php echo $r['price']; ?></h3>
	 	 							<div>
	 	 								<p><i class="fa-solid fa-share-nodes"></i></p>
	 	 								<p><i class="fa-regular fa-heart"></i></p>
	 	 							</div>		
	 	 				</div>
	 	 				<span> <?php echo $r['title']; ?></span>
	 	 				<div class="location">
	 	 						<p><?php echo $r['location']; ?></p>
	 	 						<p>Today</p>		
	 	 				</div>
	 	 		</div>

	 	 		<div class="box" id="box2">
	 	 			 	<p class="seller_description">Seller Description</p>
	 	 			 	<div class="seller_detail">
	 	 			 			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRd_Xe4a5NDJKpO5kfkikIn9RPrTcOAkAv1QTRrYvGNWw&s">
	 	 			 				<div>
	 	 			 					<h2><?php echo $r['username']; ?></h2>
	 	 			 					<p><?php echo $r['phone']; ?></p>
	 	 			 				</div>
	 	 			 		
	 	 			 	</div>
	 	 			 		<a href="chat.php?id=<?php echo $r['id'];?>">Chat with Seller</a>
	 	 		</div>


	 	 		<div class="box" id="box3">
	 	 			<h2>Posted in</h2>
	 	 			<p><?php echo $r['location']; ?></p>
	 	 			<img src="Ads/location.jpeg">

	 	 		</div>
	 	
	 	 </div>	

</div>



<!-- =============================== * Add 2 * ==================================== -->

<div class="addimg" id="addimgid">
	<img src="https://images.olx.com.pk/thumbnails/310378076-800x600.webp">
	<i class="fa-regular fa-rectangle-xmark" id="adcross"></i>

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

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script type="text/javascript">
	
///////// navigation bar ....////////

	let country = document.getElementById('country');
	let moving = document.getElementById('moving');
	let text = document.getElementById('text');
	let list = document.getElementById('list');
	

	country.addEventListener('click', () =>{
		list.classList.toggle('hidden');
		moving.classList.toggle('rotate')
	});
	function myfunction(cntry){
		text.innerHTML=cntry;
	}

	let profile=document.getElementById('profileid');
	let dropdown=document.getElementById('dropdownid');

	profile.addEventListener('click', () =>{
		dropdown.classList.toggle('displaydropdown');
		
	});



//////////// Ad 1 ..............................

 	let addimg2 = document.getElementById('addimgid2');
 	let adcross2=document.getElementById('adcross2');

 	adcross2.addEventListener('click', () =>{
 		addimg2.style.display = "none";
 	});

/////////////// product img ................

 	const swiper = new Swiper('.swiper', {
  
  		loop: true,

  		pagination: {
  		  el: '.swiper-pagination',
  		},

  		navigation: {
    		nextEl: '.swiper-button-next',
    		prevEl: '.swiper-button-prev',
  		},

 
});



	//////////// Ad2 ..............................
 
 	let addimg = document.getElementById('addimgid');
 	let adcross=document.getElementById('adcross');

 	adcross.addEventListener('click', () =>{
 		addimg.style.display = "none";
 	});

 


</script>


</body>
</html>