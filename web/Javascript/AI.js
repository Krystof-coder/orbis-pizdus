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
    if(sirky - kolik > 0){
    nigga1.textContent = nigga2.textContent;
    sirky = sirky - kolik;
    sýrek();
    nigga2.textContent = "Dobře, dáváš " + kolik + " sirek, dohromady teda máme " + sirky + " sirek!";
    kolikDam = 4 - kolik;

    document.getElementById("jepka").innerHTML = '        <button class="btn">1</button><button class="btn" >2</button><button class="btn" >3</button>';
    setTimeout(function(){
        nigga1.textContent = nigga2.textContent;
        sirky -= kolikDam;
        nigga2.textContent = "Já tam beru pico " + kolikDam + " sirek. Dohromady potom máme " + sirky + " sirek";
        sýrek();
        document.getElementById("jepka").innerHTML = '        <button class="btn" onclick="pridej(1)">1</button><button class="btn" onclick="pridej(2)">2</button><button class="btn" onclick="pridej(3)">3</button>';
    }, 1000);
}else{
    nigga2.textContent = "EZ vyhrál jsem (zase)";
    sirky = 0;
    sýrek();
    setTimeout(function() {
        document.getElementById('input').style.display = 'flex';
    }, 5555);
}
}