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
            echo '<div class="container">' . "<p>Passed &#10004</p>" . "<br><br>" . '</div>';

        } else {
            $_SESSION['failures']++;
            echo '<div class="container">' . "<p>Failed &#10008</p>" . "<br>" . '</div>';
            echo '<div class="container">' . "<p>Expected $function_return to equal $equal_to.</p>" . "<br>" . '</div>';
        }
    }
}