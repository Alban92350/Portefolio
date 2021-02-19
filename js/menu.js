// Menu
const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener("click", () => {
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

var test = document.querySelectorAll('a');
console.log(test);


for (var i = 0 ; i < test.length; i++ ){
  test[i].addEventListener('click', () => {
    navLinks.classList.remove('open');
    links.classList.remove('fade')
  })
}



 



