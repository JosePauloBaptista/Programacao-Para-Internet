document.body.addEventListener('keypress', sorteiaCores)

function sorteiaCores(){
    for (let i=1; i<=5; i++){
        let box = document.querySelector("#box-"+i);
        color = randomColor();
        box.style.backgroundColor = color;
        setTextColor(box, color);
    }
}

function setTextColor(element, color){
    element.querySelector("p").innerHTML = color.toUpperCase();
}

function randomNumber(){
    return Math.floor(Math.random()*255).toString(16);
}

function randomColor(){
    return "#" + randomNumber() + randomNumber() + randomNumber();
}
