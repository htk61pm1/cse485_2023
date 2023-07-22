<?php
function convertToLowercase($arr) {
    foreach ($arr as &$element) {
        $element = strtolower($element);
    }
    unset($element); // Đặt con trỏ ở cuối mảng
    return $arr;
}

$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'B', 'C', 'E'];
$arr3 = ['a', 0, null, false];

$result1 = convertToLowercase($arr1);
$result2 = convertToLowercase($arr2);
$result3 = convertToLowercase($arr3);

echo "Mảng 1 sau khi chuyển: ";
print_r($result1);

echo "Mảng 2 sau khi chuyển: ";
print_r($result2);

echo "Mảng 3 sau khi chuyển: ";
print_r($result3);
?>
