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
