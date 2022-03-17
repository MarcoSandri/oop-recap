<?php

    //richiamo il file contenente le classi
    require_once __DIR__ . '/classes/parents.php';
    require_once __DIR__ . '/classes/child.php';

    echo '<h3>Creo un nuovo oggetto parent</h3>';
    $parent = new parents('public'); //creo un nuovo oggetto
    var_dump($parent);

    echo '<hr>';

    echo '<h3>Richiamo il metodo setProtected su parent</h3>';
    $parent->setProtected('protected parent property'); //Richiamo il metodo setProtected su parent
    var_dump($parent);

    echo '<hr>';

    echo '<h3>Richiamo il metodo getProtected su parent</h3>';
    //posso accedere alle proprietà protette perchè il metodoo che le richiama ha visibilità pubblica
    echo "<h4>La proprietà protected di parent ha come valore: '" . $parent->getProtected() . "'</h4>";

    echo '<hr>';

    echo '<h3>Richiamo il metodo getPrivate su parent</h3>';
    //posso accedere alle proprietà private perchè il metodo che le richiama ha visibilità pubblica
    echo "<h4>La proprietà protected di parent ha come valore: '" . $parent->getPrivate() . "'</h4>";

    echo '<hr>';

    echo '<h3>Richiamo il metodo setTraitProperty su parent</h3>';
    //Richiamo un metodo non proprio della classe ma ereditato da un trait
    $parent->setTraitProperty('New trait Property');
    var_dump($parent);

    echo '<hr>';

    echo '<h3>Creo un nuovo oggetto child</h3>';
    $child = new child("public inherited property", "public proper property", "test");
    var_dump($child);

    echo '<hr>';

    echo '<h3>Non posso intervenire su una proprietà privata ereditata dalla classe padre con un metodo di una classe figlio</h3>';
    //Non posso intervenire su una proprietà privata ereditata con un metodo di una classe figlio
    $child->setPrivateInherited("prova");
    var_dump($child);

    echo '<hr>';

    echo '<h3>Posso intervenire su una proprietà privata ereditata dalla classe padre con un metodo ereditato dalla classe padre</h3>';
    $child->setPrivate("Proprietà privata");
    var_dump($child);

    echo '<hr>';

    echo '<h3>Richiamo il metodo setTraitProperty su child</h3>';
    //Richiamo un metodo non proprio della classe ma ereditato dalla classe padre che a sua volta l'ha ereditato da un trait
    $child->setTraitProperty('New trait Property inherited');
    var_dump($child);
    
?>