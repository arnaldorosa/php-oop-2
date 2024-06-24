<?php
    class Category extends Product {
        public $id;
        public $name;
        public $icon;

        public function __construct($_id, $_name) {
            $this->id = $_id;
            $this->name = $_name;
        }
    }
?>