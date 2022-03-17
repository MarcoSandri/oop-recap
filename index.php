<?php

    //richiamo il file contenente le classi
    require_once __DIR__ . '/classes/parents.php';
    require_once __DIR__ . '/classes/child.php';

    //creo un nuovo oggetto
    $parent = new parents('public', );
    var_dump($parent);


?>