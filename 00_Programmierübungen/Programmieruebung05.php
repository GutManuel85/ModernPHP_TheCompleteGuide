<?php

// Assume that $totalCost and $loyaltyPoints are already set

// Write your code here

if ($loyaltyPoints < 3000) {
    $totalCost += $totalCost * 0.08;
    $loyaltyPointsNew = $loyaltyPoints + $totalCost * 100;
    echo "You have fewer than 3000 Loyalty Points. No discount is available. Your final price (after taxes) would be \${$totalCost}. Your new Loyalty Balance would be: {$loyaltyPointsNew}.";
}
if($loyaltyPoints >= 3000) {
    $totalCost *= 0.95;
    $totalCost += $totalCost * 0.08;
    $loyaltyPointsNew = $loyaltyPoints + $totalCost * 100 - 3000;
    echo "You can spend 3000 Loyalty Points for a discount of 5%. Your final price (after discount and taxes) would be \${$totalCost}. Your new Loyalty Balance would be: {$loyaltyPointsNew}.";
}
if ($loyaltyPoints >= 6000) {
    $totalCost *= 0.85;
    $totalCost += $totalCost * 0.08;
    $loyaltyPointsNew = $loyaltyPoints + $totalCost * 100 - 6000;
    echo "You can spend 6000 Loyalty Points for a discount of 15%. Your final price (after discount and taxes) would be \${$totalCost}. Your new Loyalty Balance would be: {$loyaltyPointsNew}.";
}
