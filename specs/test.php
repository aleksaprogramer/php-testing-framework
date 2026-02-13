<?php
require_once './modules/test-functions.php';
require_once './classes/Test.php';
require_once './modules/functions.php';

// test_title('addition');
// test('normal addition', addition(5, 5), 10);
// test('addition with zero', addition(5, 0), 5);
// test('addition with negative number', addition(5, -5), 0);
// test('addition with both negative numbers', addition(-5, -5), -10);
// test('addition with large numbers', addition(100000, 500554), 2);

// test_title('subtraction');
// test('normal subtraction', subtraction(2, 6), -4);
// test('subtraction with zero', subtraction(15, 0), 15);
// test('subtraction with negative number', subtraction(15, -1), 16);
// test('subtraction with both negative numbers', subtraction(-15, -1), 14);

testing('sabiranje')->title();
testing('sabiranje')->test_case('normalno sabiranje')->expect(addition(2, 5))->to_equal(7);
testing('sabiranje')->test_case('sabiranje sa nulom')->expect(addition(2, 0))->to_equal(2);

title('sabiranje');
test_case('normalno sabiranje')->expect(addition(2, 5))->to_equal(6);
test_case('sabiranje sa nulom')->expect(addition(2, 0))->to_equal(3);