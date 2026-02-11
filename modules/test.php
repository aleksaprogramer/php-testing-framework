<?php
require_once './modules/functions.php';

// Testing Logic ////////////////////////////////////////////////////////////////////////////////////////////////////
$_SESSION['tests'] = 0;
$_SESSION['failures'] = 0;

// Basic testing function
function test ($title, $case, $function, $to_equal) {
    $_SESSION['tests']++;
    echo '<div class="container">' . "<h3>Function: " . $title . '</h3></div>';
    echo '<div class="container">' . "<h3>Case: " . $case . '</h3></div>';

    if ($function === $to_equal) {
        echo '<div class="container">' . '<p>Passed</p><br>' . '</div>';

    } else {
        $_SESSION['failures']++;
        echo '<div class="container">' . '<p>Failed</p><br>' . '</div>';
    }
}
// Testing Logic ////////////////////////////////////////////////////////////////////////////////////////////////////

// Trying out basic testing function
test('sabiranje', 'Normalno sabiranje', sabiranje(5, 5), 10);
test('sabiranje', 'Sabiranje sa nulom', sabiranje(5, 0), 10);