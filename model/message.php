<?php

function findAll(): array
{
    include('connexion.php');

    try {
        $dbh = getConnexion();
        $query = $dbh->prepare('SELECT * FROM message ORDER BY date DESC LIMIT 15');
        $query->execute();
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $result = $query->fetchAll();
        $query->closeCursor();
        $db = null;
        return array_reverse($result);
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

function deleteOne(int $id)
{
    include('connexion.php');

    try {
        $dbh = getConnexion();
        $query = $dbh->prepare("DELETE FROM message WHERE id=:id ");
        $query->bindParam(':id', $id);
        $query->execute();
        $query->closeCursor();
        $db = null;
    } catch (PDOException $e) {
        print "Erreur lors de l'insertion d'un message'!: " . $e->getMessage() . "<br />";
        die();
    }
}

function updateOne(array $post)
{
    include('connexion.php');

    try {
        $dbh = getConnexion();
        $query = $dbh->prepare("UPDATE message SET content=:message WHERE id=:id ");
        $query->bindParam(':id', $post['id']);
        $query->bindParam(':message', $post['message']);
        $query->execute();
        $query->closeCursor();
        $db = null;
    } catch (PDOException $e) {
        print "Erreur lors de l'insertion d'un message'!: " . $e->getMessage() . "<br />";
        die();
    }
}
