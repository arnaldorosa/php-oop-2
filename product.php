<?php

    include './discount.php';

    class Product {

        use DiscountTrait;

        public $name;
        public $description;
        public $price;
        public $category;
    
        public function __construct($_name, $_price, $_category) {
            $this->name = $_name;
            $this->price = $_price;

            if ($_price <= 0) {
                throw new Exception("Il prezzo del prodotto non è valido.");
            }

            $this->category = $_category;
        }

        public function getName() {
            return $this->name;
        }
        
        public function getPrice() {
        return $this->price;
        }
        
        public function getCategory() {
        return $this->category;
        }
        
        public function getDescription() {
        return "Questo prodotto è " . $this->name . ", costa " . $this->price . " € e appartiene alla categoria " . $this->category . ".";
        }

        public function getDiscountedPrice($discountPercent) {
            return $this->calculateDiscount($this->price, $discountPercent);
        }
    }

?>