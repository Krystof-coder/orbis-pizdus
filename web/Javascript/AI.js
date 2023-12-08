let sirky;
let displaySirky = document.getElementById('grafika');

function input(params) {
    sirky = document.getElementById('kockajebuh').value;
    console.log(sirky);
    if(sirky > 124.65 || sirky < 1){
        document.getElementById("kockajebuh").value = "";
        document.getElementById("kockajebuh").placeholder = "Máš to blbě vole!";
        }else {
    document.getElementById('input').style.display = 'none';
    sýrek();
    if(sirky % 4 == 1){
        document.getElementById("")
    }
        }
}

function sýrek(params) {
    displaySirky.innerHTML = '';
    for(let i = 1; i <= sirky; i++){
        displaySirky.innerHTML += "<img src='/web/images/sirkav2.svg' alt=''>";
    }
}