<?php

require_once('handler.php');

$number = $_POST["number"];
$collatzCalculator = new CollatzCalculator($number);

$collatzResult = $collatzCalculator->calculateCollatz();



?>