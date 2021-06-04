<?php

function findAll(): array
{
    include('connexion.php');

    try {
        $dbh = getConnexion();
        $query = $dbh->prepare('SELECT * FROM message ORDER BY date DESC LIMIT 10');
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

function newMessage(array $post): void
{
    include('connexion.php');

    try {
        $dbh = getConnexion();
        $query = $dbh->prepare("INSERT INTO message (pseudo, content) VALUES(:pseudo, :message)");
        $query->bindParam(':pseudo', $post['pseudo']);
        $query->bindParam(':message', $post['message']);
        $query->execute();
        $query->closeCursor();
        $db = null;
    } catch (PDOException $e) {
        print "Erreur lors de l'insertion d'un message'!: " . $e->getMessage() . "<br />";
        die();
    }
}
