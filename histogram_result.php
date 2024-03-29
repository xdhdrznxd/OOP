<!DOCTYPE html>
<html>
<head>
    <title>Collatz Results</title>
</head>
<body>
    <h1>Collatz Results</h1>
    <?php
    require_once 'handler.php';

    $start = $_POST['start'];
    $end = $_POST['end'];

    $iterations = CollatzHistogramCalculator::calculateRange($start, $end);
    CollatzHistogramCalculator::displayHistogram($iterations);
    ?>
</body>
</html>
