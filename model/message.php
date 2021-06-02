<?php

function getMessages()
{
    $pseudo = ['Adèle', 'Victor', 'Raymond', 'Claudia', 'Stéphanie'];
    $length = 1;
    $messages = [];
    while ($length <= 5) {
        $pos = $length === 1 ? 'er' : 'ème';
        $messages[$length]['date'] = date('d-m-Y h:m:s');
        $messages[$length]['message'] = "Ceci est le $length$pos message enregistré sur le chat";
        $messages[$length]['pseudo'] = $pseudo[$length];
        $length++;
    }
    return $messages;
}
