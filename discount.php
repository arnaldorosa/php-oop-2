<?php

    trait DiscountTrait {
        public function calculateDiscount($price, $discountPercent) {
            $discountAmount = ($price * $discountPercent) / 100;
            $discountedPrice = $price - $discountAmount;
            return $discountedPrice;
        }
    }
?>