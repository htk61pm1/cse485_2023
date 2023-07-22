<?php
$numbers = [
 'key1' => 12,
 'key2' => 30,
 'key3' => 4,
 'key4' => -123,
 'key5' => 1234,
 'key6' => -12565,
];

// Lấy ra phần tử đầu tiên và cuối cùng trong mảng
$firstElement = reset($numbers);
$lastElement = end($numbers);

echo "Phần tử đầu tiên: $firstElement" . PHP_EOL;
echo "Phần tử cuối cùng: $lastElement" . PHP_EOL;

// Tìm số lớn nhất, số nhỏ nhất, và tổng các giá trị trong mảng
$maximumValue = max($numbers);
$minimumValue = min($numbers);
$sumOfValues = array_sum($numbers);

echo "Số lớn nhất: $maximumValue" . PHP_EOL;
echo "Số nhỏ nhất: $minimumValue" . PHP_EOL;
echo "Tổng các giá trị: $sumOfValues" . PHP_EOL;

// Sắp xếp mảng theo chiều tăng và giảm các giá trị
$ascendingValues = $numbers;
asort($ascendingValues);

$descendingValues = $numbers;
arsort($descendingValues);

echo "Mảng theo chiều tăng các giá trị: " . PHP_EOL;
print_r($ascendingValues);

echo "Mảng theo chiều giảm các giá trị: " . PHP_EOL;
print_r($descendingValues);

// Sắp xếp mảng theo chiều tăng và giảm các key
$ascendingKeys = $numbers;
ksort($ascendingKeys);

$descendingKeys = $numbers;
krsort($descendingKeys);

echo "Mảng theo chiều tăng các key: " . PHP_EOL;
print_r($ascendingKeys);

echo "Mảng theo chiều giảm các key: " . PHP_EOL;
print_r($descendingKeys);
?>
