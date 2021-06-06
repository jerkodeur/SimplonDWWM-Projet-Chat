<?php

function checkform(array $post)
{
    $form_error = [];

    if (isset($post['update'])) {
        if ($post['message'] === '') $form_error['general'] = 'empty';
    } else {
        if ($post['pseudo'] === '') $form_error['pseudo'] = 'empty';

        if ($post['message'] === '') $form_error['message'] = 'empty';
    }

    return $form_error;
}
