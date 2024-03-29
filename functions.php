<?php


function collatz($number) {
    $iterations = 0;
    $maxValue = $number;

    while ($number != 1) {
        echo $number . "<br/>";

        if ($number % 2 == 0) {
            $number /= 2;
        } else {
            $number = 3 * $number + 1;
        }

        $maxValue = max($maxValue, $number);
        $iterations++;
    }   

    echo $number . "<br/>";

    echo "\nMaximum value: " . $maxValue . "\n";
    echo "Total iterations: " . $iterations . "\n<br/><br/><br/>";

    return ['number' => $number, 'maxValue' => $maxValue, 'iterations' => $iterations];
}

function calculateRange($start, $finish) {
    $results = ['numbers' => [], 'maxValues' => [], 'iterations' => []];

    for ($i = $start; $i <= $finish; $i++) {
        $collatzResult = collatz($i);

        $results['numbers'][] = $i;
        $results['maxValues'][] = $collatzResult['maxValue'];
        $results['iterations'][] = $collatzResult['iterations'];
    }

    return $results;
}


function findMinMaxIterations($results) {
    $maxIterationsIndex = array_search(max($results['iterations']), $results['iterations']);
    $minIterationsIndex = array_search(min($results['iterations']), $results['iterations']);

    $maxIterationsNumber = $results['numbers'][$maxIterationsIndex];
    $minIterationsNumber = $results['numbers'][$minIterationsIndex];

    echo "<br/><br/><br/><br/><br/>Number with maximum iterations: $maxIterationsNumber<br/>";
    echo "Iterations: {$results['iterations'][$maxIterationsIndex]}<br/>";
    echo "Max Value: {$results['maxValues'][$maxIterationsIndex]}<br/><br/>";

    echo "Number with minimum iterations: $minIterationsNumber<br/>";
    echo "Iterations: {$results['iterations'][$minIterationsIndex]}<br/>";
    echo "Max Value: {$results['maxValues'][$minIterationsIndex]}<br/>";
}


?>