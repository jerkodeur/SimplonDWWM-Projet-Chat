<?php

function getConnexion()
{

    include('.env.php');

    $options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
        // Initialiser une nouvelle connexion à la base de donnée
        return new PDO("$db_type:host=$db_host;dbname=$db_name", $db_user, $db_pass, $options);
    } catch (PDOException $e) {
        print "Erreur connexion !: " . $e->getMessage() . "<br/>";
        die();
    }
}
