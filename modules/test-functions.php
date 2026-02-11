<?php

function test_title ($title) {
    echo "<div class='container'><hr style='margin-top: 30px;'><h3 style='margin-top: 10px;'>Function: $title()</h3></div>";
}

function test ($case, $function_return, $to_equal) {
    $_SESSION['tests']++;
    echo '<div class="container"><h3 style="margin-left: 20px; margin-top: 20px;">Test Case: ' . $case . '</h3></div>';

    if ($function_return === $to_equal) {
        echo '<div class="container"><h4 style="margin-left: 20px">Passed &#10004</h4></div>';

    } else {
        $_SESSION['failures']++;
        echo '<div class="container"><h4 style="margin-left: 20px; color: #ba0505;">Failed &#10008</h4></div>';
        echo "<div class='container'><h4 style='margin-left: 20px; color: #ba0505;'>Expected '$function_return' to equal '$to_equal'.</h4></div>";
    }
}