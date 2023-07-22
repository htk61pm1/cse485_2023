<?php
function convertToUppercase($arr) {
    foreach ($arr as &$element) {
        $element = strtoupper($element);
    }
    unset($element); // Đặt con trỏ ở cuối mảng
    return $arr;
}

$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'b', 'c', 'd'];
$arr3 = ['a', 0, null, false];

$result1 = convertToUppercase($arr1);
$result2 = convertToUppercase($arr2);
$result3 = convertToUppercase($arr3);

echo "Mảng 1 sau khi chuyển: ";
print_r($result1);

echo "Mảng 2 sau khi chuyển: ";
print_r($result2);

echo "Mảng 3 sau khi chuyển: ";
print_r($result3);
?>
