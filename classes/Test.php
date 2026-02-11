<?php

class Test {
    public $title;

    public function __construct ($title) {
        $this->title = $title;
    }

    public function get_title () {
        return $this->title;
    }

    public function set_title ($title) {
        $this->title = $title;
    }

    public function title () {
        echo '<div class="container">' . "<h4>Function: " . $this->title . "</h4><br>" . '</div>';
    }

    public function assert ($case, $function_return, $equal_to) {
        $_SESSION['tests']++;
        echo '<div class="container">' . "Test Case: " . $case . "<br>" . '</div>';

        if ($function_return === $equal_to) {
            echo '<div class="container">' . "Passed &#10004" . "<br><br>" . '</div>';

        } else {
            $_SESSION['failures']++;
            echo '<div class="container">' . "Failed &#10008" . "<br>" . '</div>';
            echo '<div class="container">' . "Expected $function_return to equal $equal_to." . "<br>" . '</div>';
        }
    }
}