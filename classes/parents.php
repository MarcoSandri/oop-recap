<?php

    //richiamo il file contenente i traits
    require_once __DIR__ . '/../traits/traits.php';
    
    //classe genitore
    class parents {
        
        //includo il trait 'traits'
        use traits;
        
        public $public; //proprietà accessibile anche all'esterno della classe, eriditata
        protected $protected; //proprietà accessibile solo dall'interno della classe, ereditata
        private $private; //proprietà accessibile solo dalla classe dove è stata dichiarata, ereditata ma non accessibile dall'esterno della classe
        
        //metodo costruttore: viene invocata quando l'oggetto viene creato, permette di eseguire azioni alla creazione.
        //è possibile assegnare un valore ad una proprietà all'interno degli argomenti del metodo, rendendo opzionale la sua compilazione quando viene chiamato il metodo
        public function __construct($public, $private = "placeholder"){
            
            //Assegnazione di un valore ad una proprietà
            $this->public = $public;
            
            $this->private = $private;
            
        }
        
        //metodo set: generalmente utilizzata per assegnare un valore ad una proprietà
        public function setProtected($protected) {
            
            $this->protected = $protected;
        }
        
        //metodo get: generalmente utilizzata per ricevere il valore di una proprietà
        public function getProtected() {
            
            return $this->protected;
        }
        
        public function getPrivate() {

            return $this->private;
        }
        
        public function setPrivate($private) {
    
            $this->private = $private;
        }
        
    }
    
    ?>