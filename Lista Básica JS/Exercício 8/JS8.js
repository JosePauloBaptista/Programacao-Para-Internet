let txt = document.querySelector('#txt');
let textos = document.querySelector('#textos');
let btn = document.querySelector('#btn');

function copiaTexto(){
    /*textos.innerHTML += txt.value;*/
    let p = document.createElement("p");
    p.innerHTML = txt.value;
    textos.appendChild(p);
}

btn.addEventListener('click', copiaTexto);
