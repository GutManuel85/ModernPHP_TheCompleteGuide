<?php

// The variable $loyaltyPoints will be available to you

// Write your code here

if ($loyaltyPoints < 3000) {
    echo "You have fewer than 3000 Loyalty Points. No discount is available.";
} elseif ($loyaltyPoints >= 6000) {
    echo "You can spend 6000 Loyalty Points for a discount of 15%.";
} else {
    echo "You can spend 3000 Loyalty Points for a discount of 5%.";
}
