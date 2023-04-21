///////////////////////catagories...........
 	
 	let loadmore=document.getElementById('loadmoreid');
 	let product = document.getElementById('product');
 
	let category = document.getElementById('Catagory')
 	let cars = document.getElementById('cars');
 	let mobiles = document.getElementById('mobile');
 	let property= document.getElementById('property');
 	let business = document.getElementById('business');
 	let furniture= document.getElementById('furniture')
 	let books = document.getElementById('Books')
 	let animals = document.getElementById('animals')



 	let carcats = document.getElementById('carcats');
 	let mobilescat = document.getElementById('Mobiles');
 	let propertcat= document.getElementById('propy');
 	let businesscat = document.getElementById('busin');
 	let furniturecat= document.getElementById('furn')
 	let bookscat = document.getElementById('booky')
 	let animalscat = document.getElementById('animl')

 

 	 	category.addEventListener('click', () => {
 		carcats.style.display='none';
 		loadmore.style.display='block';
 		product.style.display='block';
 	});


 	 	cars.addEventListener('click', () => {
 		carcats.style.display='block';
 		mobilescat.style.display='none';
 		propertcat.style.display='none';
 		businesscat.style.display='none';
 		furniturecat.style.display='none';
 		bookscat.style.display='none';
 		animalscat.style.display='none';
 		loadmore.style.display='none';
 		product.style.display='none';
 	});
	
	mobiles.addEventListener('click', () => {
 		mobilescat.style.display='block';
 		carcats.style.display='none'; 		
 		propertcat.style.display='none';
 		businesscat.style.display='none';
 		furniturecat.style.display='none';
 		bookscat.style.display='none';
 		animalscat.style.display='none';
 		loadmore.style.display='none';
 		product.style.display='none';
 	});
 		
 		property.addEventListener('click', () => {
 		propertcat.style.display='block';
 		mobilescat.style.display='none';
 		carcats.style.display='none'; 		
 		businesscat.style.display='none';
 		furniturecat.style.display='none';
 		bookscat.style.display='none';
 		animalscat.style.display='none';
 		loadmore.style.display='none';
 		product.style.display='none';
 	});
 		business.addEventListener('click', () => {
 		propertcat.style.display='none';
 		mobilescat.style.display='none';
 		carcats.style.display='none'; 		
 		furniturecat.style.display='none';
 		bookscat.style.display='none';
 		animalscat.style.display='none';
 		businesscat.style.display='block';
 		loadmore.style.display='none';
 		product.style.display='none';
 	});
 			furniture.addEventListener('click', () => {
 		furniturecat.style.display='block';
 		propertcat.style.display='none';
 		mobilescat.style.display='none';
 		carcats.style.display='none'; 		
 		bookscat.style.display='none';
 		animalscat.style.display='none';
 		businesscat.style.display='none';
 		loadmore.style.display='none';
 		product.style.display='none';
 	});
 				books.addEventListener('click', () => {
 	bookscat.style.display='block';
 	furniturecat.style.display='none';
 		propertcat.style.display='none';
 		mobilescat.style.display='none';
 		carcats.style.display='none'; 		
 		
 		animalscat.style.display='none';
 		businesscat.style.display='none';
 		loadmore.style.display='none';
 		product.style.display='none';
 	});
 			animals.addEventListener('click', () => {
 	animalscat.style.display='block';
 	furniturecat.style.display='none';
 		propertcat.style.display='none';
 		mobilescat.style.display='none';
 		carcats.style.display='none'; 		
 		bookscat.style.display='none';
 		
 		businesscat.style.display='none';
 		loadmore.style.display='none';
 		product.style.display='none';
 	});
 	


