<?php

require_once("handler.php");

$firstTerm = $_POST["firstTerm"];
$commonDifference = $_POST["commonDifference"];
$numTerms = $_POST["numTerms"];

$calculator = new ArithmeticProgressionCalculator($firstTerm, $commonDifference, $numTerms);
$progression = $calculator->calculateProgression();
echo"<br/>Sum of progression: ";
$calculator->calculateSum();

?>