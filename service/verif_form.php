<?php
$form_error = [];

if (isset($_POST['update'])) {
    if ($_POST['message'] === '') $form_error['general'] = 'empty';
} else {
    if ($_POST['pseudo'] === '') $form_error['pseudo'] = 'empty';

    if ($_POST['message'] === '') $form_error['message'] = 'empty';
}

if ($form_error === []) {
    if (isset($_POST['update'])) {
        updateOne($_POST);
    } else {
        newMessage($_POST);
    }
    $_POST = [];
    header('Location: index.php#bottom');
}
