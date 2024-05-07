let b = document.querySelector('#btn');
let inputA = document.querySelector('#a');
let inputB = document.querySelector('#b');
let resultado = document.querySelector('#result');

function loadvar(){
    let nA = Number(inputA.value);
    let nB = Number(inputB.value);
    let c = soma(nA,nB);
    console.log(c);
    alert(c);
    resultado.innerHTML = c;
}

function soma(a,b){
    return a + b;
}

b.addEventListener('click', loadvar);
