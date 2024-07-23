<?php

// You will have access to both arrays $playlist and $songRecommendations

// Write your code here

if (!empty($playlist) && isset($playlist)) {
    echo "Your lastly added song was: '" . end($playlist) . "'.";
}
if (isset($playlist) && count($playlist) <= 3) {
    $playlist[] = $songRecommendations[rand(0, count($songRecommendations) - 1)];
} elseif (count($playlist) > 10) {
    unset($playlist[0]);
}
