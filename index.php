<?php
session_start();

$_SESSION['tests'] = 0;
$_SESSION['failures'] = 0;

require_once './lib/inc/header.php';
require_once './specs/additionTest.php';
require_once './lib/inc/results.php';
require_once './lib/inc/warning-line.php';
require_once './lib/inc/footer.php';