<?php
echo("\n\nforeach influence on array internal pointer:\n");
$array = [0, 1, 2];
foreach ($array as &$val) {
    var_dump(current($array));      // int(0) int(0) int(0)
}

echo("\n\nforeach in php7 uses copy of array\n");
$array = [0, 1, 2];
$ref =& $array;
foreach ($array as $val) {
    var_dump($val);         // int(0)  int(1) int(2)
    unset($array[1]);
}

echo("\n\ninfluence on foreach when iterating by link:\n");
$array = [0];
foreach ($array as &$val) {
    var_dump($val);     // int(0)   int(1)
    $array[1] = 1;
}