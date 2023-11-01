<?php 
                // Propojení do databáze žejo pičo k xampu když tak
                $connection = mysqli_connect("localhost","root","","op");
                $query = "SELECT * FROM stranky";

                $vysledek = mysqli_query($connection,$query);

                while($row = mysqli_fetch_assoc($vysledek)){
                    $id = $row["ID"];
                }
                
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Orbis pizdus</title>
</head>
<body>

    <!-- Header vlastně bude jen to centurnutý vyhledávání, jestli se chápem bude to nějak uprostřed nahoř -->
    <header>
        <h1 id="hlNapisPico">Orbis pizdus/<input id="hlVyhledavacPolic" type="search" placeholder="Proč má kočka pivo?"></h1>
    </header>
    <!-- Všechny píčoviny už potom, tohle bude ten hlavní středovej panel -->
    <main>
        <div class="nejhlavnejsipanel">
            <div>
               <?php
                $unikatniCisla = array();
                while (count($unikatniCisla) < 4) {
                    $nahodneCislo = rand(1, $id);
    
                    if (!in_array($nahodneCislo, $unikatniCisla)) {
                    $unikatniCisla[] = $nahodneCislo;
                    }
                }

                for($i = 0; $i < 4; $i++){
                    $vybratVse = "SELECT * FROM stranky WHERE ID = ".$unikatniCisla[$i];
                    $takToVyber = mysqli_query($connection,$vybratVse);
                    while($row = mysqli_fetch_assoc($takToVyber)){
                        $odkaz = $row["odkaz"];
                        $nadpis = $row["nazev"];
                        $popis = $row["popis"];
                    }
                    if($i % 2 == 0){
                echo
"<a href='c/".$odkaz.">'
<button class='mainbtn".$i + 1 ." mainbtn'>
<nadpisButton class='levyButton'>".$nadpis."</nadpisButton>
<zbytekPopisekButton>
".
$popis
."
</zbytekPopisekButton>
</button>
</a>";         
                    }else{
                echo
"<a href='c/".$odkaz.">'
<button class='mainbtn".$i + 1 ." mainbtn'>
<nadpisButton class='pravyButton'>".$nadpis."</nadpisButton>
<zbytekPopisekButton>
".
$popis
."
</zbytekPopisekButton>
</button>
</a>";
                    }
                }
    
    ?>

<!--
                 <button class="mainbtn1 mainbtn" href="pizdomanie/ctvrte.html">
                 Jsi tady jen připravím co tam bude, a jak to celé bude vypadat, on vlastně ten button bude celej odkaz totiž 
                <nadpisButton class="levyButton">Nějakej nadpis</nadpisButton>
                <zbytekPopisekButton>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget pharetra odio, non pharetra ante. Nunc semper elementum augue, ac luctus odio hendrerit vel. Suspendisse lobortis lorem nec ligula aliquam pharetra. Phasellus id placerat purus, id sollicitudin velit. Donec quis vehicula ex. Sed dictum felis at nisl ullamcorper maximus. Nam eu diam et libero molestie suscipit sed non diam. Nullam ultrices luctus pulvinar
                     
                </zbytekPopisekButton>
                </button>
                <button class="mainbtn2 mainbtn">
                <nadpisButton class="pravyButton">Nějakej nadpis</nadpisButton>
                <zbytekPopisekButton>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget pharetra odio, non pharetra ante. Nunc semper elementum augue, ac luctus odio hendrerit vel. Suspendisse lobortis lorem nec ligula aliquam pharetra. Phasellus id placerat purus, id sollicitudin velit. Donec quis vehicula ex. Sed dictum felis at nisl ullamcorper maximus. Nam eu diam et libero molestie suscipit sed non diam. Nullam ultrices luctus pulvinar
                     
                </zbytekPopisekButton>
                </button>
            </div>
            <div>
                <button class="mainbtn3 mainbtn">
                <nadpisButton class="levyButton">
                    Nějakej nadpis
                </nadpisButton>
                <zbytekPopisekButton>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget pharetra odio, non pharetra ante. Nunc semper elementum augue, ac luctus odio hendrerit vel. Suspendisse lobortis lorem nec ligula aliquam pharetra. Phasellus id placerat purus, id sollicitudin velit. Donec quis vehicula ex. Sed dictum felis at nisl ullamcorper maximus. Nam eu diam et libero molestie suscipit sed non diam. Nullam ultrices luctus pulvinar
                     
                </zbytekPopisekButton></button>
                <button class="mainbtn4 mainbtn">
                  <nadpisButton class="pravyButton">Nějakej nadpis</nadpisButton>
                <zbytekPopisekButton>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget pharetra odio, non pharetra ante. Nunc semper elementum augue, ac luctus odio hendrerit vel. Suspendisse lobortis lorem nec ligula aliquam pharetra. Phasellus id placerat purus, id sollicitudin velit. Donec quis vehicula ex. Sed dictum felis at nisl ullamcorper maximus. Nam eu diam et libero molestie suscipit sed non diam. Nullam ultrices luctus pulvinar
                     
                </zbytekPopisekButton></button>
-->
            </div>
        </div>
    </main>
    <footer>
        
    </footer>
    
    <script src="Javascript/index.js"></script>
</body>
</html>
