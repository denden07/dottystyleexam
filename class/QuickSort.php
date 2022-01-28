<?php

header('Content-type: text/plain');

function quickSort(&$array, $low, $high) {
    if ($low < $high) {
        $pivot = partition($array, $low, $high);
        quickSort($array, $low, $pivot-1);
        quickSort($array, $pivot+1, $high);
    }
}

function partition(&$array, $low, $high) {
    $i = $low;
    $pivot = $array[$high];
    for($j = $low; $j <=$high; $j++) {
        if($array[$j] < $pivot) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
            $i++;
        }
    }

    $array[$high] = $array[$i];
    $array[$i] = $pivot;

    return $i;
}


function printResult($array, $n) {
    for ($i = 0; $i < $n; $i++)
        echo $array[$i]." ";
    echo "\n";
}

$input = $_GET['input'];
$my_array = str_split($input);
$n = sizeof($my_array);

echo "Unsorted array\n";
printResult($my_array, $n);


quickSort($my_array, 0, $n-1);
echo "\n Sorted array\n";
printResult($my_array, $n);


?>