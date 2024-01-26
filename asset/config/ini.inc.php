<?php
//gestion des erreurs hors base de données
ini_set('display_errors', 1); // si y a une erreur on l'arriche 
error_reporting(E_ALL); // detecte la majorité des errurs 





//gestion des erreur générer dans la base de données 


//configuration de la base de données
$options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,//on affiche les erreurs. En prod, on met ERRMODE_SILENT
      PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',//on définit le charset 
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,//on récupère les données sous forme de tableau associatif
];

define('CONNECTBDD',array(
      'type'=>'mysql',//type de bdd
      'host'=>'localhost',//hôte
      'user'=>'root',//utilisateur
      'pass'=>'',//mot de passe Sous MAC & LAMP : 'root' Sous Windows : ''
      'database' => 'blague'//nom de la base de données
));

try{
    $pdo = new PDO(CONNECTBDD['type'].':host='.CONNECTBDD['host'].';dbname='.CONNECTBDD['database'],CONNECTBDD['user'],CONNECTBDD['pass'],$options);
}catch(PDOException $e){
    die('<p>Erreur lors de la connexion à la base de données : '.$e->getMessage() . '</p>');
}







?>