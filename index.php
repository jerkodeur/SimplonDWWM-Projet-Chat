<?php
include('service/functions.php');
include('model/message.php');

if ($_POST) {
    include('service/verif_form.php');
} elseif (isset($_GET['d'])) {
    deleteOne($_GET['d']);
    header('Location: index.php');
}

include('view/default.php');
