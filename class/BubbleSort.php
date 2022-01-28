<?php

header('Content-type: text/plain');

function bubbleSort(&$array, $counter) {

    for($i=0; $i<$counter; $i++) {
        for($j=0; $j < $counter-$i-1; $j++) {
            if($array[$j] > $array[$j+1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $temp;
            }
        }
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

bubbleSort($my_array, $counter);
echo "\nSorted array\n";
printResult($my_array, $counter);
?>