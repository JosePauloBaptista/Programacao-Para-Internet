let display = document.querySelector("#display");
let equacao = "0";
display.textContent = equacao;

function addEquacao (caracter){
    equacao += caracter;
    display.textContent = equacao;
}

document.querySelectorAll(".buttonChar, .buttonOp").

forEach( button => {
    button.addEventListener("click", ()=> {
        let ch = button.innerHTML;
        if(ch == "C"){
            ch = "";
            equacao = "0";
            addEquacao(ch);
        }else{
            addEquacao(ch);
        }
    })

})
document.querySelector("#bntequal").addEventListener("click", ()=>{
    display.textContent = eval(equacao);
})