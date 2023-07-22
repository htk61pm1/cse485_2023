<?php
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

// Tính toán giá trị trung bình của mảng
$averageValue = array_sum($numbers) / count($numbers);

echo "Giá trị trung bình của mảng: $averageValue" . PHP_EOL;

// Liệt kê các số có giá trị lớn hơn giá trị trung bình
echo "Các số lớn hơn giá trị trung bình: ";
foreach ($numbers as $number) {
    if ($number > $averageValue) {
        echo "$number ";
    }
}
echo PHP_EOL;

// Liệt kê các số có giá trị nhỏ hơn hoặc bằng giá trị trung bình
echo "Các số nhỏ hơn hoặc bằng giá trị trung bình: ";
foreach ($numbers as $number) {
    if ($number <= $averageValue) {
        echo "$number ";
    }
}
echo PHP_EOL;
?>
