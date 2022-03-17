<?php

    //richiamo il file contenente la classe padre
    require_once __DIR__ . '/parents.php';

    //classe figlio
    //eredita tutti i metodi e le proprietà pubbliche e protette della classe padre
    class child extends parents{

        public $childProperty;

        public function __construct($public, $private = "placeholder", $childProperty){
            
            parent::__construct($public, $private); //con parent:: richiamo una funzione o una proprietà del padre

            $this->childProperty = $childProperty;

        }

    }

?>