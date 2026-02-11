<?php

function sabiranje ($a, $b) {
    return $a + $b;
}

// Basic testing function
function test ($title, $function, $to_equal) {
    echo $title . ":";
    echo "<br>";

    if ($function === $to_equal) {
        echo "Passed";

    } else {
        echo "Failed";
    }
}

test('Funkcija sabiranja', sabiranje(5, 5), 10);