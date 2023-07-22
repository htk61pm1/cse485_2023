<?php
$array = array(1, 2, 3, 4, 5);

echo "Mảng ban đầu: " . PHP_EOL;
print_r($array);

$indexToDelete = 2; // Phần tử thứ 3 có khóa là 2 (bắt đầu từ 0)

if (isset($array[$indexToDelete])) {
    unset($array[$indexToDelete]);
    $array = array_values($array);
}

echo "Sau khi xóa phần tử thứ 3: " . PHP_EOL;
print_r($array);
?>
