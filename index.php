<?php
session_start();

$_SESSION['tests'] = 0;
$_SESSION['failures'] = 0;

require_once './inc/header.php';
require_once './specs/test.php';
require_once './inc/results.php';
require_once './inc/warning-line.php';
require_once './inc/footer.php';