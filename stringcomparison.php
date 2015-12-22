<?php

//**** Areas of shapes ****

function areaRec($l, $w) {
    $a = $l * $w;
    echo "A rectangle of length " . $l . " and width " . $w ." has an area of ". $a . " .";
}
function areaTri($b, $h){
    $a = 0.5 * $b * $h;
    echo "A triangle of " . $b . " by " . $h ." has an area of ". $a . " .";
}

function areaCir($r){
    $a = M_PI*($r*$r);
    echo "A circle of radius" . $r . " has an area of ". $a . " .";
}

function areaTrap($t, $b, $h){
    $a = 0.5*($t+$b) * $h;
    echo "A trapezoid of " . $t . " by " . $b . " by " . $h ." has an area of ". $a . " .";
}

function areasDif($x, $y){
    echo "Shapes with dimentsions of " . $x . " by " . $y . "have varying areas";
    $rec = areaRec($x, $y);
    $tri = areaTri($x, $y);
    $cir = areaCir($x);
    echo "Area of circle: " . $cir . "<br>" . "Area of rectangle: " . $rec . "<br>" . " Area of triangle: " . $tri;
}

areasDif(7, 3);

//**** Functions *****

function First() {
    echo "Hello World";
}

First();

function Second($num1, $num2) {
    echo $num1 . " " . $num1 . " little " . $num2;
}

Second("twinkle", "star");

function Math($x, $y){
    $a = $x + $y;
    $b = $x - $y;
    $c = $x / $y;
    $d = $x * $y;
    $e = $y / $x;
    $f = "<br>" . "The sum of this equals ";
    echo $f . $b;
    echo $f . $a;
    echo $f . $c;
    echo $f . $d;
    echo $f . $e;
}

Math(6, 8);

function inspectVar($h) {
    var_dump($h);
}

inspectVar("harry");

//**** Largest prime factorials ****
//
//    $a = 105;
//    $b = 2;
//    $c;
//
//    while ($a > $b) {
//        if ($a % $b == 0) {
//            $a = $a / $b;
//            $c = $b;
//            $b = 2;
//        }else {
//            $b = $b++;
//            return;
//        }
//}


//**** Fibonacci numbers ****

    $fibonaccitotal = 0;

    $first = 0;

    $second = 1;

    $topNum = 40;

    $count = 1;

    for ($i = 1; $i <= $topNum; $i++) {

        $workingTotal = $first + $second;

        echo "Fibornacci sequence:" . $count . ":" . $workingTotal . '<br>';
        $count++;
        if ($workingTotal < 4000000) {

            if ($workingTotal % 2 == 0) {
                $fibonaccitotal = $fibonaccitotal + $workingTotal;
            }
        } else {
            break;
        }
        $first = $second;

        $second = $workingTotal;
    }
    echo $fibonaccitotal;

// **** Prime numbers ****

    $num = 150;

    echo "<h3>These are the prime number between 0 and " . $num . "</h3>";

    for ($firstNum = 2; $firstNum <= $num; $firstNum++) {

        for ($j = 2; $j < $firstNum; $j++) {

            if ($firstNum % $j === 0) {
                break;
            }
        }

        if ($firstNum == $j) {
            echo $firstNum . "<br>";
        }
    }


////**** Array manipulation ****
//
//    $springTempsF = array(68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78, 68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83);
//
//    $springTempsC = array();
//
//
////**** Fahrenheit to centigrade vice versa ****
//
//    $actualTemp = 0;
//
//    function tempConverter($temp, $unit) {
//        if (strstr($unit, "c")) {
//            $actualTemp = ($temp * 9) / 5 + 32;
//            echo round($actualTemp, 1) . "f" . "<br>";
//
//            return $actualTemp;
//        } elseif (strstr($unit, "f")) {
//            $actualTemp = (($temp - 32) * (5 / 9));
//            echo round($actualTemp, 1) . "c" .  "<br>";
//
//            return $actualTemp;
//        } else {
//            echo "please enter valid temperature unit";
//        }
//    }
//    echo "<br>" . "Converted Spring temperatures to centigrade <br>";
//
//    foreach ($springTempsF as $TempC) {
//
//        $actualTemp = tempConverter($TempC, "f");
//
//        $springTempsC[] = $actualTemp;
//    }
//
//    $average = 0;
//
//    $total = array_sum($springTempsC);
//
//    function calculateAvg($h, $k) {
//        $result = $h / (count($k));
//        echo "<br>" . round($result, 2) . " Average Temp" . "<br>";
//    }
//
//    calculateAvg($total, $springTempsC);
//
//    sort($springTempsC);
//
//    $lowestFive = array_slice($springTempsC, 0, 5);
//
//    $springTempsCRev = array_reverse($springTempsC);
//
//    $topFive = array_slice($springTempsCRev, 0, 5);
//
//    echo "<br>" . "Lowest five temperatures:" . "<br>";
//    foreach($lowestFive as $temps) {
//        echo round($temps, 2) . "<br>";
//    }
//    echo "<br>" . "Highest five temperatures:" . "<br>";
//    foreach($topFive as $temps) {
//        echo round($temps, 2) . "<br>" ;
//    }
//
////**** Array practice more cities ****
//
//    $cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
//
//    echo count($cities) . "\n";
//
//    array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");
//
//    echo count($cities) . "\n";
//
//    foreach ($cities as $city) {
//        echo $city . "\n";
//    }
//
//    $countries = array("Japan", "Mexico", "USA", "India", "Korea", "China", "Nigeria", "Argentina", "Egypt", "England", "USA", "India", "Japan", "China");
//
//    $cityCountry = array_combine($cities, $countries);
//
//    var_dump($cityCountry);
//
//
////**** Array practice weather ****
//
//    $weather = array("rain", "sunshine", "cælouds", "hail", "sleet", "snow", "wind");
//
//    echo "We've seen all kinds of weather this month. At the beginning of the month, we had " . $weather[5] . " and " . $weather[6] . ". Then came " . $weather[1] . " with a
//          few " . $weather[2] . " and some " . $weather[0] . ". At least we didn't get any " . $weather[3] . " or " . $weather[4] . "<br>";
//
//
////**** CM converter ****
//
//    $newLength = 0;
//    function converter($length) {
//        $newLength = $length * 2.54;
//        if ($newLength > 100) {
//            $newLength = $newLength / 100;
//            echo $newLength . "m <br>";
//        } else {
//            echo $newLength . "cm <br>";
//        }
//    }
//
//    converter(10);
//
//
//
////**** FizzBuzz test ****
//    function FizzBuzz() {
//        for ($x = 0; $x <= 100; $x++) {
//            if (($x % 3 === 0) && ($x % 5 === 0)) {
//                echo "fizzbuzz" . "<br>";
//            } elseif ($x % 3 == 0) {
//                echo "fizz" . "<br>";
//            } elseif ($x % 5 == 0) {
//                echo "buzz" . "<br>";
//            } else {
//                echo $x . "<br>";
//            }
//        }
//    }
//
//    FizzBuzz();
//
//    compares_inputs("hello", "hello");
//
//    function does_something($inputA, $inputB) {
//        if(strcmp($inputA, $inputB)) {
//            echo "true";
//        } else {
//            echo "nope";
//        }
//    }
//
//    does_something("bleep", "doop");
//
////**** String Comparison things ****
//
//    function compares_inputs($input1, $input2) {
//        for ($i = 0; $i < strlen($input1) || $i < strlen($input2); $i++) {
//            if ($input1[$i] == $input2[$i]) {
//                echo $input1 . " and " . $input2 . " are the same. yey!";
//            } else {
//                return null;
//            }
//        }
//        die();
//    }
//
//    ;
//
//
////**** Math version of fizzbuzz ****
//
//    $multiples = 0;
//
//    for ($x = 0; $x < 10; $x++) {
//        if (($x % 3 === 0) || ($x % 5 === 0)) {
//            $multiples = $multiples + $x;
//        }
//    };
//
//    echo $multiples;
//
//    echo "hello take 2";

?>
