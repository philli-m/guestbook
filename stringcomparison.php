<?php

//Prime numbers

//$prime = array();
//
//function primeNumbers($i) {


$num = 100;

echo "<h3>These are the prime number between 0 and " . $num . "</h3>";


for($firstNum = 2; $firstNum <= $num; $firstNum ++) {

    for($j = 2; $j < $firstNum; $j ++) {

        if ($firstNum % $j === 0) {
            break;
        }
    }

    if ($firstNum == $j) {
            echo " Prime Number :" . $firstNum . "<br>";
    }
}


//array manipulation

$springTempsF = array(68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78, 68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83);

$springTempsC = array();

//Fahrenheit to centigrade vice versa

$actualTemp = 0;

/**
 * @param $temp
 * @param $unit
 */

function tempConverter($temp, $unit) {
    if(strstr($unit, "c")) {
        $actualTemp = ($temp * 9) / 5 + 32;
        echo round($actualTemp, 1) . "f \n";
        return $actualTemp;
    }
    elseif(strstr($unit, "f")) {
        $actualTemp = (($temp - 32) * (5/9));
        echo round($actualTemp, 1) . "c \n";
        return $actualTemp;
    }
    else {
        echo "please enter valid temperature unit";
    }
}



tempConverter(45, "f");

foreach($springTempsF as $TempC) {

    $actualTemp = tempConverter($TempC, "f");

    $springTempsC[] = $actualTemp;
}

$average = 0;

$total = array_sum($springTempsC);

function calculateAvg($h, $k) {
    $result = $h / (count($k));
    echo round($result, 2) . " average Temp";
}

calculateAvg($total, $springTempsC);
sort($springTempsC);

function getFive( $ray, $num ) {
    echo array_slice( $ray, 0, $num );
}

getFive($springTempsC, 5);

$topFive = array_slice($springTempsC, 0, 5);

var_dump($topFive);
//
//$lowestFive = array_slice($springTempsC, -5);
//



//var_dump($springTempsC);

//Array practice more cities

//$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
//
//echo count($cities) . "\n";
//
//array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");
//
//echo count($cities) . "\n";
//
//foreach($cities as $city) {
//    echo $city . "\n";
//}
////sort($cities);
//
//$countries = array("Tokyo" => "Japan", "Mexico City" => "Mexico", "New York City" => "USA" , "Mumbai" => "India", "Seoul" => "Korea", "Shanghai" => "China", "Lagos" => "Nigeria", "Buenos Aires" =>"Argentina", "Cairo" => "Egypt", "London" => "England");
//
////
////foreach($cities as $city) {
////    echo "\n" . $city . "\n";
////}
//
//var_dump($countries);
//
//
////Array practice weather
//$weather = array("rain", "sunshine", "cælouds", "hail", "sleet", "snow", "wind");
//
//echo "We've seen all kinds of weather this month. At the beginning of the month, we had " . $weather[5] . " and " . $weather[6] . ". Then came " . $weather[1] . " with a
//      few " . $weather[2] . " and some " . $weather[0] . ". At least we didn't get any " . $weather[3] . " or " . $weather[4] . ". \n";
//
//

//
//
//
//
////CM converter
//$newLength = 0;
//function converter($length) {
//    $newLength = $length * 2.54;
//        if($newLength > 100) {
//            $newLength = $newLength / 100;
//            echo $newLength . "m \n";
//        }
//        else {
//            echo $newLength . "cm \n";
//        }
//
//}
//
//converter(10);
//
////FizzBuzz test
//for ($x = 0; $x <= 100; $x ++) {
//    if(($x % 3 === 0) && ($x % 5 === 0)) {
//        echo "fizzbuzz \n";
//    } elseif($x % 3 == 0) {
//            echo "fizz \n";
//    } elseif($x % 5 == 0) {
//            echo "buzz \n";
//    } else {
//        echo "$x \n";
//    }
//}
//
//
////String Comparison things
//var_dump('hi');
//
///**
// * @param $input1
// * @param $input2
// *
// * @return bool
// */
//function compares_inputs($input1, $input2) {
//    for ($i = 0; $i < strlen($input1) || $i < strlen($input2); $i++) {
//        if ($input1[$i] == $input2[$i]) {
//            return true;
//        } else {
//            return null;
//        }
//    }
//    die();
//}
//
//;
//
//compares_inputs("hello", "hello");
//
//function does_something($myinput, $theirinput) {
//    echo $theirinput . " " . $myinput;
//
//    for ($j = 0; $j < strlen($myinput) || strlen($theirinput); $j++) {
//    }
//}
//;
//
//does_something("bleep", "doop");



//Math version of fizzbuzz

//$multiples = 0;
//
//for ($x = 0; $x < 10; $x++) {
//    if (($x % 3 === 0) || ($x % 5 === 0)) {
//        $multiples = $multiples + $x;
//    }
//}
//
//;
//
//echo $multiples;
//
//echo "hello take 2";

//Fibonacci numbers

$fibonaccitotal = 0;

$fibonacciseq = array();

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

//    if ($workingTotal % 2 === 0) {
//        $fibonaccitotal = $fibonaccitotal + $workingTotal;
//    }


//Second attempt at Fibonacci still not working
//$fibo = array(1, 2);
//$sumFibo = 0;
//
//while ($fibo[1] < 4000000) {
//    $fibo [] = array_shift($fibo) + $fibo[0];
//
//    $sumFibo += ($fibo[1] % 2 == 0) ? $fibo[1] : 0;
//}
//
//
//echo $fibonaccitotal;
//echo $sumFibo;

?>
