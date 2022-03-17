<?php

    //i trait sono un'insieme di proprietà e metodi applicabili a più classi
    trait traits {

        public $traitProperty = "trait property";

        public function setTraitProperty($traitProperty) {

            $this->traitProperty = $traitProperty;
        }
    }

?>