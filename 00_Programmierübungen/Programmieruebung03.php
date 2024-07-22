<?php

// Assume $price is already set

// Write your code here

$priceOriginal = $price;

$price *= 0.7;
$price -= 10;
$price *= 1.2;

$loyaltyPoints = $price * 100;

echo "After applying discounts and taxes, the item's price is reduced from \${$priceOriginal} to \${$price}, and you've earned {$loyaltyPoints} loyalty points.";
