<?php

require ('asset/config/ini.inc.php');

function aleatoire($max){
    $nbAlea=mt_rand(0,$max-1);
    return $nbAlea; 
}
$questionBdd ="";
$reponseBdd = "";
$content = "";

if(isset($_POST['gen']) && $_POST['gen']=="générer"){
    extract($_POST);
    $pdoStatement = $pdo->prepare ("SELECT `question`, `reponse` FROM `joke`");
    $pdoStatement->execute();
    
    $nbBlague = $pdoStatement->rowCount();
    if($nbBlague==0){
        $content = "<p class='messageError'>aucune blague pour le moment.</p>";
    }else{
        $tableau = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($tableau);
        $positionBlague = aleatoire($nbBlague);
        $questionBdd = "<p class='question'>" . $tableau[$positionBlague]["question"] . "</p>";
        $reponseBdd = "<p class='reponse'>" . $tableau[$positionBlague]["reponse"] . "</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Blague</title>

    
</head>
<body>
    <header>
        <h1>Bienvenue dans la blague de momo</h1>
    </header>
    <main>
        <section>
            <?php
            echo $content;
            echo $questionBdd;
            echo $reponseBdd;
            ?>
            <form method="post">
                <input type="submit" name="gen" value="générer" id="gen">
            </form>
            <div id="lesBoutons">
                <div>
                    <button id="boutonDrole1">&#x1F44D;</button>
                    <button id="boutonDrole2">&#x1F606; </button>
                    <button id="boutonDrole3">&#x1F923;</button>
                </div>
                <div>
                    <button id="boutonFlop1"> &#x1F636;</button>
                    <button id="boutonFlop2">&#x1F44E;</button>
                    <button id="boutonFlop3">&#x1F480;</button>
                </div>
            </div>
            <a href="ajouter.php">Ajouter une blague</a>
        </section>
    </main>
    <footer>
        
    </footer>
    <script>
    // drole
    'use strict'
        // récupération du bouton
        const drole1 = document.getElementById('boutonDrole1');
        //création de la fonction audio
        function haha(){
            //objet Audio qui contient le son stoker dans la varaible son
            const son_top_1 = new Audio("./asset/son/clash-royale.mp3");
            //déclancher le son
            son_top_1.play();
        }
        //evenement click sur la fonction
        drole1.addEventListener("click", haha);
        
        //drole 2
        const drole2 = document.getElementById('boutonDrole2');
        function haha2(){
            const son_top_2 = new Audio("./asset/son/oh-no.mp3");
            son_top_2.play();
        }
        drole2.addEventListener("click", haha2);
        
        //drole3
        const drole3 = document.getElementById('boutonDrole3');
        function haha3(){
            const son_top_3 = new Audio("./asset/son/rires-humain.mp3");
            son_top_3.play();
        }
        drole3.addEventListener("click", haha3);


        //flop 
        const flop1 = document.getElementById('boutonFlop1');
        function bouhh(){
            const son_flop_1 = new Audio ("./asset/son/null.mp3");
            son_flop_1.play();
        }
        flop1.addEventListener("click", bouhh);

        //flop 2
        const flop2 = document.getElementById('boutonFlop2');
        function bouhh2(){
            const son_flop_2 = new Audio("./asset/son/le-plus-nul.mp3");
            son_flop_2.play();
        }
        flop2.addEventListener("click", bouhh2);
        //flop3
        const flop3 = document.getElementById('boutonFlop3');
        function bouhh3(){
            const son_flop_3 = new Audio("./asset/son/nul-pas-bien.mp3");
            son_flop_3.play();
        }
        flop3.addEventListener("click", bouhh3);
    </script>
</body>
</html>