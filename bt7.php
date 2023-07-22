<?php
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];

// Mảng để lưu trữ các số từ 100 đến 200 và chia hết cho 5
$resultArray = array();

foreach ($array as $number) {
    if ($number >= 100 && $number <= 200 && $number % 5 == 0) {
        $resultArray[] = $number;
    }
}

// Hiển thị các số tìm thấy
if (count($resultArray) > 0) {
    echo "Các số từ 100 đến 200 và chia hết cho 5 là: " . implode(', ', $resultArray);
} else {
    echo "Không có số nào từ 100 đến 200 và chia hết cho 5 trong mảng.";
}
?>

