<?php
    class Toy extends Product {
        public $material;
        public $size;
        public $year;
    
        public function __construct($_name, $_price, $_category, $_material, $_year) {
            parent::__construct($_name, $_price, $_category,);
            $this->material = $_material;
            $this->year = $_year;
        }

        public function getMaterial() {
        return $this->material;
        }
        
        public function getYear() {
        return $this->year;
        }
        
        public function getDescription() {
        return parent::getDescription() . " Questo giocattolo è fatto di " . $this->material . " ed è stato prodotto nel " . $this->year . ".";
        }
    }
    
?>