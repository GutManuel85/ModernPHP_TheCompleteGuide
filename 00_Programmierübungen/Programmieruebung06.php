<?php
// Ensure that $selectedCoffee is always set to a meaningful value: it will be initialized in some tests (in the background) but not in others

// Write your code here

if (empty($selectedCoffee)) {
    $selectedCoffee = 'drip';
}

echo '<div class="coffee-info">';
if ($selectedCoffee === 'espresso')
    echo
    '<div id="espresso-info">
            <h1>Espresso ☕</h1>
            <p>Espresso is a concentrated coffee drink with a bold flavor. It pairs perfectly with a chocolate croissant. 🍫🥐</p>
        </div>';
else {
    echo '    
        <div id="drip-coffee-info">
            <h1>Drip Coffee ☕</h1>
            <p>Drip coffee, a staple in many routines, is known for its straightforward brewing process and comforting, familiar taste. Perfect for starting your morning or as a midday pick-me-up. ☕️🌅</p>
        </div>';
}
echo '</div>';
