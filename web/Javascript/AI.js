let sirky;
let displaySirky = document.getElementById('grafika');
const nigga1 = document.getElementById("nigga1");
const nigga2 = document.getElementById("nigga2");
let kolikDam;

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
        nigga1.textContent = "Seš na řadě, tak hrej pičo!";
    } else {
        if(sirky % 4 == 0){
            kolikDam = 3;
        } else {
        kolikDam = (sirky % 4) - 1;
        }
        
        nigga1.textContent = "Začínáme tedy s "+ sirky + "! Beru " + kolikDam + "!";
        
        sirky -= kolikDam;
        sýrek();
        nigga2.textContent = "Dohromady máme teď sirek " + sirky + "! Hraješ ty!";
    }
        }
}

function sýrek(params) {
    displaySirky.innerHTML = '';
    for(let i = 1; i <= sirky; i++){
        displaySirky.innerHTML += "<img src='/web/images/sirkav2.svg' alt=''>";
    }
}

function pridej(kolik){
    nigga1.textContent = nigga2.textContent;
    sirky = sirky - kolik;
    sýrek();
    nigga2.textContent = "Dobře, dáváš " + kolik + "sirek, dohromady teda máme " + sirky + "sirek!";
}