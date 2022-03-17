<?php

    //classe genitore
    class parents {

        public $public; //proprietà accessibile anche all'esterno della classe, eriditata
        protected $protected; //proprietà accessibile solo dall'interno della classe, ereditata
        private $private; //proprietà accessibile solo dalla classe dove è stata dichiarata, non è ereditata

        //funzione costruttore: viene invocata quando l'oggetto viene creato, permette di eseguire azioni alla creazione
        public function __construct($public){

            //Assegnazione di un valore ad una proprietà
            $this->public = $public;
            
        }

        //funzione set: generalmente utilizzata per assegnare un valore ad una proprietà
        public function setProtected($protected) {

            $this->protected = $protected;
        }

        //funzione get: generalmente utilizzata per ricevere il valore di una proprietà
        public function getProtected($protected) {

            return $this->protected;
        }


    }

?>