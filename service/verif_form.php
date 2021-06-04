<?php
$form_error = [];

if ($_POST['pseudo'] === '') $form_error['pseudo'] = 'empty';

if ($_POST['message'] === '') $form_error['message'] = 'empty';


if ($form_error === []) {
    newMessage($_POST);
    header('Location: index.php');
}
