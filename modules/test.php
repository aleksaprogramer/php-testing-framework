<?php
require_once './modules/functions.php';

$_SESSION['tests'] = 0;
$_SESSION['failures'] = 0;

// Basic testing function
function test ($title, $function, $to_equal) {
    $_SESSION['tests']++;
    echo '<div class="container">' . $title . ":" . "<br>" . '</div>';

    if ($function === $to_equal) {
        echo '<div class="container">' . "Passed" . "<br><br>" . '</div>';

    } else {
        $_SESSION['failures']++;
        echo '<div class="container">' . "Failed" . "<br><br>" . '</div>';
    }
}

// Trying out basic testing function
test('Funkcija sabiranja', sabiranje(5, 5), 10);
test('Funkcija oduzimanja', oduzimanje(12, 10), 2);