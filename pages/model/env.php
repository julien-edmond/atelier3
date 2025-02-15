<?php
    $nom_base = "blandin";
    //dans d'autres cas l'ôte peut être 'localhost'
    //ou l'adresse ip du serveur de BDD
    $hote = "mariadb";
    $utilisateur="maguser";
    $mot_de_passe="magpass";
    $connexion = new PDO('mysql:host='.$hote.';dbname='.$nom_base.';charset=utf8',$utilisateur, $mot_de_passe);//new PDO : créait une nouvelle connection(instance) à la base de donnees, 'mysql:host='.$host.': spécifie l'adresse du serveur de la base de donnee cette adresse est stocké dans la variable $host, dbname='.$database: définie le nom de la base de donnees stocker dans la variable $database, $user, $password : contiennent respectivement le nom d'utilisateur et le mot de passe pour se connecter à la base de données.
    //configuration du mode erreur
    var_dump($connexion);

    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   
?>
