<?php

function formatChatDate(string $sqldate): string
{
    $tranform_to_date = date_create($sqldate);
    $date = date_format($tranform_to_date, 'd-m-y');
    $time = date_format($tranform_to_date, 'h:i:s');
    return "[$date] -> $time";
}
