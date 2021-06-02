<?php

function getMessages()
{
    $pseudo = ['Adèle', 'Victor', 'Raymond', 'Claudia', 'Stéphanie'];
    $length = 0;
    $messages = [];
    while ($length < 5) {
        $pos = $length + 1 === 1 ? 'er' : 'ème';
        $messages[$length]['date'] = date('d-m-Y h:m:s');
        $messages[$length]['message'] = "Ceci est le " . $length + 1 . $pos . " message enregistré sur le chat";
        $messages[$length]['pseudo'] = $pseudo[$length];
        $length++;
    }
    return $messages;
}
