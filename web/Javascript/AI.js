let sirky;
let displaySirky = document.getElementById('grafika');

function input(params) {
    sirky = document.getElementById('kockajebuh').value;
    console.log(sirky);

    document.getElementById('input').style.display = 'none';
    sýrek();
}

function sýrek(params) {
    displaySirky.innerHTML = '';
    for(let i = 1; i <= sirky; i++){
        displaySirky.innerHTML += "<img src='/web/images/sirkav2.svg' alt=''>";
    }
}