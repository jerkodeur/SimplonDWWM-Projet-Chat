<?php
require 'service/verif_form.php';
require 'controller/functions.php';
require 'model/message.php';
require 'model/connexion.php';

$db = getConnexion();

if ($_POST) {
    $form_error = checkform($_POST);

    if ($form_error === []) {
        if (isset($_POST['update'])) {
            updateOne($db, $_POST);
        } else {
            newMessage($db, $_POST);
        }
        $_POST = [];
    }
} elseif (isset($_GET['d'])) {
    deleteOne($db, $_GET['d']);
}

$messages = findAll($db);
$db = null;

include('view/default.php');
