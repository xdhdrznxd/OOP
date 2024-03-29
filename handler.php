<?php

class CollatzCalculator {
    private $number;
    private $maxValue;
    private $iterations;

    public function __construct($number) {
        $this->number = $number;
        $this->maxValue = $number;
        $this->iterations = 0;
    }

    public function calculateCollatz() {
        while ($this->number != 1) {
            echo $this->number . "<br/>";

            if ($this->number % 2 == 0) {
                $this->number /= 2;
            } else {
                $this->number = 3 * $this->number + 1;
            }

            $this->maxValue = max($this->maxValue, $this->number);
            $this->iterations++;
        }

        echo $this->number . "<br/>";

        echo "\nMaximum value: " . $this->maxValue . "\n";
        echo "Total iterations: " . $this->iterations . "\n<br/><br/><br/>";

        return ['number' => $this->number, 'maxValue' => $this->maxValue, 'iterations' => $this->iterations];
    }
}

class RangeCalculator {
    public static function calculateRange($start, $finish) {
        $results = ['numbers' => [], 'maxValues' => [], 'iterations' => []];

        for ($i = $start; $i <= $finish; $i++) {
            $collatzCalculator = new CollatzCalculator($i);
            $collatzResult = $collatzCalculator->calculateCollatz();

            $results['numbers'][] = $i;
            $results['maxValues'][] = $collatzResult['maxValue'];
            $results['iterations'][] = $collatzResult['iterations'];
        }

        return $results;
    }

    public static function findMinMaxIterations($results) {
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
}

class ArithmeticProgressionCalculator {
    private $firstTerm;
    private $commonDifference;
    private $numTerms;

    public function __construct($firstTerm, $commonDifference, $numTerms) {
        $this->firstTerm = $firstTerm;
        $this->commonDifference = $commonDifference;
        $this->numTerms = $numTerms;
    }

    public function calculateProgression() {
        $progression = [];
        $currentTerm = $this->firstTerm;

        echo "Arithmetic Progression: ";

        for ($i = 1; $i <= $this->numTerms; $i++) {
            $progression[] = $currentTerm;
            echo $currentTerm;

            if ($i < $this->numTerms) {
                echo ', ';
            }

            $currentTerm += $this->commonDifference;
        }
        echo "<br/>";
        return $progression;
    }

    public function calculateSum() {
        $sum = ($this->numTerms / 2) * (2 * $this->firstTerm + ($this->numTerms - 1) * $this->commonDifference);
        echo $sum;
        return $sum;
    }
}

?>