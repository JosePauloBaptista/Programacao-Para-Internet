let container = document.querySelector(".container");
let eventoCapturado;

document.addEventListener('keypress', adicionaParagrafo)

function adicionaParagrafo(evento){
    eventoCapturado = evento;
    let p = document.createElement("p");
    p.innerHTML = evento.keyCode + " - " + evento.code;
    container.append(p);
}
