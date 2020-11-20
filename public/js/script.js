function updateSlider(data) {
	document.getElementById("sliderdata").action = "/car/"+data.car_id;
	document.getElementById("car_name").value  = data.car_name;
	document.getElementById("seatno").value  = data.plate_no;
	document.getElementById("price").value  = data.price_km ;
	document.getElementById("modelno").value  = data.model_name;
	document.getElementById("transmission").value  = data.transmission;
	document.getElementById("fuel").value  = data.fuel;
	document.getElementById("desc").value  = data.description ;
	document.getElementById("plateno").value  = data.plate_no;
	//document.getElementById("sliderimage").value = data.slider_image;
	document.getElementById("sliderButton").innerHTML="Update";
	 window.scrollTo(0, 0); 
}