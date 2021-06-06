<?php

function findAll(PDO $dbh): array
{
    try {
        $query = $dbh->prepare('SELECT * FROM message ORDER BY date DESC LIMIT 15');
        $query->execute();
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $result = $query->fetchAll();
        $query->closeCursor();

        return array_reverse($result);
    } catch (PDOException $e) {
        print "Erreur lors de la récupération des messages!: " . $e->getMessage() . "<br />";
        die();
    }
}

function newMessage(PDO $dbh, array $post): void
{
    try {
        $query = $dbh->prepare("INSERT INTO message (pseudo, content) VALUES(:pseudo, :message)");
        $query->bindParam(':pseudo', $post['pseudo']);
        $query->bindParam(':message', $post['message']);
        $query->execute();
        $query->closeCursor();
    } catch (PDOException $e) {
        print "Erreur lors de l'insertion d'un message'!: " . $e->getMessage() . "<br />";
        die();
    }
}

function deleteOne(PDO $dbh, int $id)
{
    try {
        $dbh = getConnexion();
        $query = $dbh->prepare("DELETE FROM message WHERE id=:id ");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $query->closeCursor();
    } catch (PDOException $e) {
        print "Erreur lors de l'insertion d'un message'!: " . $e->getMessage() . "<br />";
        die();
    }
}

function updateOne(PDO $dbh, array $post)
{
    try {
        $dbh = getConnexion();
        $query = $dbh->prepare("UPDATE message SET content=:message WHERE id=:id ");
        $query->bindParam(':id', $post['id'], PDO::PARAM_INT);
        $query->bindParam(':message', $post['message']);
        $query->execute();
        $query->closeCursor();
    } catch (PDOException $e) {
        print "Erreur lors de l'insertion d'un message'!: " . $e->getMessage() . "<br />";
        die();
    }
}
