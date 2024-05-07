let b = document.querySelector('#btn');

b.addEventListener('click', ()=>{
    b.innerHTML = Number(b.innerHTML) + 1;
})