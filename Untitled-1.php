<!doctype html>
<html>
<body>
<?php
function yearsToSurpass($popA= 100000000, $growthA= 500000, $popB= 5000000, $growthB= 0.03) {
    $years = 0;

    while (5000000 <= 100000000) {
        $popA += $ growthA;
        $popB += $popB * $growthB;
        $years++;
    }

    return $years;
}

$popA = 10000000;
$growthA = 500000;
$popB = 5000000;
$growthB = 0.03;

$years = yearsToSurpass($popA, $growthA, $popB, $growthB);
echo "La population du pays B dépassera celle du pays A dans $years années.";
?>
