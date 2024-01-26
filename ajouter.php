<?php

require ('asset/config/ini.inc.php');

if(isset($_POST['ajouter']) && $_POST['ajouter']=="ajouter"){
    extract($_POST);
    $pdoStatement = $pdo->prepare ("INSERT INTO joke (question, reponse) VALUES (
        :question,
        :reponse
    )");
    $pdoStatement->bindParam(':question',$sendBlague , PDO::PARAM_STR);
    $pdoStatement->bindParam(':reponse', $sendReponse, PDO::PARAM_STR);
    $pdoStatement->execute();
    echo "Votre blague a bien été ajouter a la base de donnée";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Ajouter</title>
</head>
<body>
    <header>
       <h1> Balance ta  blague </h1> 
    </header>        
    <main>
        <section>
            <form method="post">
                <input type="text" name="sendBlague" id="sendBlague" placeholder="Blague">
                <input type="text" name="sendReponse" id="sendReponse" placeholder="Reponse">
                <input type="submit" name="ajouter" value="ajouter" id="ajouter">
            </form>
            <a href="index.php">Généré une blague !</a>
        </section>
    </main>
</body>
</html>