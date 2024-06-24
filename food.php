<?php
    class Food extends Product {
        public $weight;
        public $food_format;
        public $age;
    
        public function __construct($_name, $_price, $_category, $_weight, $_food_format, $_age) {
            parent::__construct($_name, $_price, $_category);
            $this->weight = $_weight;
            $this->food_format = $_food_format;
            $this->age = $_age;
        }

        public function getWeight() {
            if ($this->weight <= 0) {
                throw new Exception("Il peso del cibo non è corretto.");
            }
            return $this->weight;
        }

        public function getFormat() {
        return $this->food_format;
        }
        
        public function getAge() {
        return $this->age;
        }
        
        public function getDescription() {
        return parent::getDescription() . " Pesa " . $this->weight . " kg ed è " . $this->food_format . " ed è adatto per " . $this->age . ".";
        }
    };

?>
