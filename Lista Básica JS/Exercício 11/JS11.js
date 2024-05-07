let b = document.querySelector('#btn')

function genColor(){
    return ("" + (Math.floor(Math.random()*255))).toString(16);
} 

b.addEventListener('click', () => {
    document.body.style.backgroundColor = "#" + genColor() + genColor() + genColor();
})
