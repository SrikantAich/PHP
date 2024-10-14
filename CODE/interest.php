<?php

class Interest {
    protected $principleAmount;
    protected $rateOfInterest;
    protected $timePeriod;

    public function __construct($principleAmount, $rateOfInterest, $timePeriod) {
        $this->principleAmount = $principleAmount;
        $this->rateOfInterest = $rateOfInterest;
        $this->timePeriod = $timePeriod;
    }
}

class SimpleInterest extends Interest {
    public function __construct($principleAmount, $rateOfInterest, $timePeriod) {
        $simpleInterest = ($principleAmount * $rateOfInterest * $timePeriod) / 100;
        echo "<p>Simple Interest is: " . $simpleInterest . "</p>";
    }
}

class CompoundInterest extends Interest {
    public function __construct($principleAmount, $rateOfInterest, $timePeriod) {
        $compoundInterest = $principleAmount * pow((1 + $rateOfInterest / 100), $timePeriod) - $principleAmount;
        echo "<p>Compound Interest is: " . $compoundInterest . "</p>";
    }
}


$simpleInterest = new SimpleInterest(1000, 5, 2);
$compoundInterest = new CompoundInterest(1000, 5, 2);

?>