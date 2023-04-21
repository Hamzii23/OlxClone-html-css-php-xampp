
	
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

	

	//////////// Ad ..............................
 
 	let addimg = document.getElementById('addimgid');
 	let adcross=document.getElementById('adcross');

 	adcross.addEventListener('click', () =>{
 		addimg.style.display= 'none';
 	});

 	

	

	/////////////// Load More.......................

 	let loadmoreid=document.getElementById('loadmoreid');
 	let lmproductid=document.getElementById('lmproductid');

 	loadmoreid.addEventListener('click', () => {
 		lmproductid.style.display='block';
 		loadmoreid.style.display='none'
 	});

	//////////// Ad 2 ..............................

 	let addimgth = document.getElementById('addimgid2');
 	let adcrossth=document.getElementById('adcross2');

 	adcrossth.addEventListener('click', () =>{
 		addimgth.style.display = "none";
 	});


 	////////////profile................
	
	let profile=document.getElementById('profileid');
	let dropdown=document.getElementById('dropdownid');

	profile.addEventListener('click', () =>{
		dropdown.classList.toggle('displaydropdown');
		
	});



	

