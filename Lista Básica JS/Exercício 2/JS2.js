function documentHW(){
    document.write("HelloWorld");
}

function consoleHW(){
    console.log("HelloWorld");
}

function alertHW(){
    alert("HelloWorld");
}

document.body.addEventListener('click', documentHW, consoleHW, alertHW);
