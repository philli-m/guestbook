<?php

$multiples = 0;

for ($x = 0; $x < 1000; $x++) {
    if($x % (3 === 0) || ($x % 5 === 0)) {
        $multiples = $multiples + $x;
    }
}

echo $multiples;



?>