let b = document.querySelector('#btn');
let presultado = document.querySelector('#num');
let min = document.querySelector('#min');
let max = document.querySelector('#max');

b.addEventListener('click', ()=>{
    let minimo = Number(min.value);
    let maximo = Number(max.value);

    presultado.innerHTML = Math.floor(Math.random() * (maximo - minimo) + minimo);
})