<?php
require_once './modules/functions.php';

$_SESSION['tests'] = 0;
$_SESSION['failures'] = 0;

// Basic testing function
function test ($title, $function, $to_equal) {
    $_SESSION['tests']++;
    echo $title . ":" . "<br>";

    if ($function === $to_equal) {
        echo "Passed" . "<br><br>";

    } else {
        $_SESSION['failures']++;
        echo "Failed" . "<br><br>";
    }
}

// Trying out basic testing function
test('Funkcija sabiranja', sabiranje(5, 5), 10);
test('Funkcija oduzimanja', oduzimanje(12, 10), 2);