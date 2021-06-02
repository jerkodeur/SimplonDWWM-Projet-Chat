<?php

function findAll()
{
    include('connexion.php');
    try {
        $dbh = getConnexion();
        $query = $dbh->prepare('SELECT * FROM message');
        $query->execute();
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $result = $query->fetchAll();
        $query->closeCursor();
        $db = null;
        return $result;
    } catch (PDOException $e) {
        print "Erreur lors de la récupération des messages!: " . $e->getMessage() . "<br />";
        die();
    }
}
