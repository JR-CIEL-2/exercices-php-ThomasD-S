<?php

$notes = array(10, 10, 10);
function moyenne($note)
{
    $moy = 0;
    for ($i = 0; $i < $n = count($note); $i++) {
        $moy += $note[$i];

    }

    return $moy / $n;
}

echo moyenne($notes);

// test
