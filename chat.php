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
	
	<link rel="stylesheet" type="text/css" href="Css/chat_olx.css?v=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="icon" type="image/x-icon" href="https://is3-ssl.mzstatic.com/image/thumb/Purple124/v4/38/89/9d/38899db7-6654-33c0-87c4-247647e90bd0/source/256x256bb.jpg">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
	<title>Chat</title>
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
 						<a href="category.php"><button>
 				<i class="fa-solid fa-plus"></i>
 				<p>SELL</p>
 			</button>
 		</a>
 		</div>
 	</div>
 </div>	
	
</div>	





<!-- =============================== * chat box * ==================================== -->

<div class="chat_box">
   
   <div class="heading_chatbox">
   	
   	<div class="image_name_chat">
   		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRd_Xe4a5NDJKpO5kfkikIn9RPrTcOAkAv1QTRrYvGNWw&s">
   		<h2><?php echo $r['username']; ?></h2>
   	</div>

   	<i class="fa-solid fa-xmark"></i>
   </div>

   <div class="see_chat">

   	<h3 id="message"></h3>	 	
   </div>

   <div class="send_message">
   	<input type="text" placeholder="Type a message" id="text_message">
   	<input type="text" placeholder="Type a message" id="demo">
   	<i class="fa-sharp fa-solid fa-paper-plane" id="send"></i>
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
			<img src="appstore.png">
			<img src="googlestore.png">
			<img src="appgallery.jpeg">
		</div>
	</div>
</div>



<!-- =============================== * script * ==================================== -->



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



	


	//////////// Ad2 ..............................
 
 	let addimg = document.getElementById('addimgid');
 	let adcross=document.getElementById('adcross');

 	adcross.addEventListener('click', () =>{
 		addimg.style.display = "none";
 	});


 	//////////// chat ................................

 	let send = document.getElementById('send');
 	let message = document.getElementById('message');
 	let text_message = document.getElementById('text_message');
 	let demo = document.getElementById('demo');

 	send.addEventListener('click', () => {
 		message.innerHTML=text_message.value;
 		message.style.display='block';
 		text_message.value=demo.value;

 	});

</script>


</body>
</html>