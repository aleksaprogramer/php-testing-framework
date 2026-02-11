<?php
require_once './modules/functions.php';
require_once './modules/test-functions.php';
require_once './classes/Test.php';

// Trying out basic testing function
// test('sabiranje', 'Normalno sabiranje', sabiranje(5, 5), 10);
// test('sabiranje', 'Sabiranje sa nulom', sabiranje(5, 0), 5);
// test('sabiranje', 'Sabiranje sa brojevima ispod nule', sabiranje(-4, 4), 0);

// Trying out class testing functions
$test_for_sabiranje = new Test('sabiranje()');
$test_for_sabiranje->title();
$test_for_sabiranje->assert('normalno sabiranje', sabiranje(5, 5), 10);
$test_for_sabiranje->assert('sabiranje sa nulom', sabiranje(4, 0), 4);
$test_for_sabiranje->assert('sabiranje sa negativnim brojevima', sabiranje(-4, 4), 0);
$test_for_sabiranje->assert('sabiranje sa dva negativna broja', sabiranje(-4, -4), -8);