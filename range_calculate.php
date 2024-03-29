<?php

require_once('functions.php');

$start = $_POST["start"];
$finish = $_POST["finish"];

$results = calculateRange($start, $finish);

findMinMaxIterations($results);

?>