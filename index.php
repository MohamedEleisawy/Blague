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
       <p> © 2024 Mohamed Eleisawy </p>
    </footer>
    <script src="./asset/js/app.js"></script>
</body>
</html>