// Menu
const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener("click", () => {
  // hamburger.style.transform = "rotate(90deg)"
  var a = navLinks.classList.contains("open");
  if(!a){
    hamburger.style.transform = "rotate(180deg)"
    hamburger.style.transition = "0.8s";
  }else{
    hamburger.style.transform = "rotate(0deg)"
  }
  navLinks.classList.toggle("open");
  links.forEach(link => {
    link.classList.toggle("fade");
  });
});

// var a = navLinks.classList.contains('open');


 



