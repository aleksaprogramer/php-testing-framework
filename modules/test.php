<?php
require_once './modules/functions.php';
require_once './modules/test-functions.php';
require_once './classes/Test.php';

// Trying out basic testing function
test_title('sabiranje');
test('Normalno sabiranje', sabiranje(5, 5), 10);
test('Sabiranje sa nulom', sabiranje(5, 0), 5);
test('Sabiranje sa brojevima ispod nule', sabiranje(-4, 4), 0);
test('Sabiranje sa negativnim brojevima', sabiranje(-4, -4), -8);

// Trying out class testing functions
// $test_for_sabiranje = new Test('sabiranje()');
// $test_for_sabiranje->title();
// $test_for_sabiranje->assert('normalno sabiranje', sabiranje(5, 5), 10);
// $test_for_sabiranje->assert('sabiranje sa nulom', sabiranje(4, 0), 4);
// $test_for_sabiranje->assert('sabiranje sa negativnim brojevima', sabiranje(-4, 4), 0);
// $test_for_sabiranje->assert('sabiranje sa dva negativna broja', sabiranje(-4, -4), -8);
// $test_for_sabiranje->assert('sabiranje sa brojevima iznad 1000', sabiranje(1001, 5000), 6002);