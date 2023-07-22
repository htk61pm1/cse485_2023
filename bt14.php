<?php
$array1 = [
    [77, 87],
    [23, 45]
];

$array2 = [
    'giá trị 1',
    'giá trị 2'
];

// Gộp hai mảng theo key của từng mảng
$result = array_combine($array2, $array1);

print_r($result);
?>
