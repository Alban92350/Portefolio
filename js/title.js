// Title
const text = document.querySelector('.title');
const strText = text.textContent;
const splitText = strText.split("");


text.textContent = "";

for(i = 0; i < splitText.length; i++){
    text.innerHTML += "<span>" + splitText[i] + "</span>";
}

let char = 0;
let timer = setInterval(onTick, 50); 

const img = document.querySelector('#mainimg')
// img.classList.add('none')

function onTick(){
    const span = document.querySelectorAll('span')[char];
    // img.classList.remove('none')
    span.classList.add('fade');
    char ++ 
    if(char === splitText.length){
        complete();
        return;
    }
}

function complete(){
    clearInterval(timer);
    // timer = null;
}
