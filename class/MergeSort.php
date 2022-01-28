<?php

header('Content-type: text/plain');

function mergeSort(&$array, $low, $high) {
    if ($low < $high) {
        $mid = $low + (integer)(($high - $low)/2);
        mergeSort($array, $low, $mid);
        mergeSort($array, $mid+1, $high);
        merge($array, $low, $mid, $high);
    }
}

function merge(&$array, $low, $mid, $high) {
    $counter_1 = $mid - $low + 1;
    $counter_2 = $high - $mid;
    $low_array = array_fill(0, $counter_1, 0);
    $high_array = array_fill(0, $counter_2, 0);
    for($i=0; $i < $counter_1; $i++) {
        $low_array[$i] = $array[$low + $i];
    }
    for($i=0; $i < $counter_2; $i++) {
        $high_array[$i] = $array[$mid + $i + 1];
    }

    $x = 0;
    $y = 0;
    $z = $low;

    while($x < $counter_1 && $y < $counter_2) {
        if($low_array[$x] < $high_array[$y]) {
            $array[$z] = $low_array[$x];
            $x++;
        }
        else {
            $array[$z] = $high_array[$y];
            $y++;
        }
        $z++;
    }

    while($x < $counter_1) {
        $array[$z] = $low_array[$x];
        $x++;
        $z++;
    }

    while($y < $counter_2) {
        $array[$z] = $high_array[$y];
        $y++;
        $z++;
    }
}


function printResult($array, $counter) {
    for ($i = 0; $i < $counter; $i++)
        echo $array[$i]." ";
    echo "\n";
}

$input = $_GET['input'];
$my_array = str_split($input);
$counter = sizeof($my_array);
echo "Unsorted array\n";
printResult($my_array, $counter);

mergeSort($my_array, 0, $counter-1);
echo "\nSorted array\n";
printResult($my_array, $counter);
?>