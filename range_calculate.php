<?php

require_once('handler.php');

$start = $_POST["start"];
$finish = $_POST["finish"];

$results = RangeCalculator::calculateRange($start, $finish);
RangeCalculator::findMinMaxIterations($results);

?>