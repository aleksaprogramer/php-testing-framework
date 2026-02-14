<?php
require_once './lib/modules/test-functions.php';
require_once './lib/classes/Test.php';
require_once './src/addition.php';

title('addition');
test_case('Standard addition')->expect(addition(2, 3))->to_equal(5);
test_case('Addition with 0')->expect(addition(3, 0))->to_equal(3);
test_case('Addition with negative number')->expect(addition(3, -3))->to_equal(0);
test_case('Addition with both negative numbers')->expect(addition(-4, -5))->to_equal(-9);
test_case('Addition with decimal numbers')->expect(addition(0.54, 0.33))->to_equal(0.87);