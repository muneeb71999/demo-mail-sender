const navBtn = document.querySelector(".navbar-toggler") 
const navbarCloseBtn = document.querySelector(".navbar-close-btn") 

navBtn.addEventListener("click",function(e){
	e.preventDefault();
	document.querySelector('body').classList.toggle('navbar-active');
	document.getElementById("navbar-links").classList.toggle("active")
})

navbarCloseBtn.addEventListener("click",function(e){
	e.preventDefault()
	document.querySelector('body').classList.remove('navbar-active');
	document.getElementById("navbar-links").classList.remove("active")
})

document.addEventListener("DOMContentLoaded", function(){
	const urlParams = new URLSearchParams(window.location.search);
	const sent = urlParams.get('sent')

	console.log(sent);	

	if(sent && sent == "success"){
		document.getElementById("success").style.display = "block";
	}

	if(sent && sent == "error"){
		document.getElementById("error").style.display = "block";
	}
});