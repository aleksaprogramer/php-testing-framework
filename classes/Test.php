<?php

class Test {
    public $title;
    public $case;
    public $function;

    public function __construct ($title) {
        $this->title = $title;
    }

    public function test_case ($case) {
        $this->case = $case;
        return $this;
    }

    public function expect ($function) {
        $this->function = $function;
        return $this;
    }

    public function to_equal ($expected_result) {
        $_SESSION['tests']++;
        echo '<div class="container"><h3 style="margin-left: 20px; margin-top: 20px;">Test Case: ' . $this->case . '</h3></div>';

        if ($this->function === $expected_result) {
            echo '<div class="container"><h4 style="margin-left: 20px; color: #03991f;">Passed &#10004</h4></div>';

        } else {
            $_SESSION['failures']++;
            echo '<div class="container"><h4 style="margin-left: 20px; color: #ba0505;">Failed &#10008</h4></div>';
            echo "<div class='container'><h4 style='margin-left: 20px; color: #ba0505;'>Expected '$this->function' to equal '$expected_result'.</h4></div>";
        }
    }
}

function testing ($title) {
    $new_test = new Test($title);
    echo "<div class='container'><hr style='margin-top: 30px;'><h3 style='margin-top: 10px;'>Function: $title()</h3></div>";
    return $new_test;
}