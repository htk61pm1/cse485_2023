<?php
$a = [
 'a' => [
 'b' => 0,
 'c' => 1
 ],
 'b' => [
 'e' => 2,
 'o' => [
 'b' => 3
 ]
 ]
];

// Lấy giá trị = 3 có key là 'b' từ mảng trên
$value1 = $a['b']['o']['b'];
echo "Giá trị = 3 có key là 'b': " . $value1 . "\n";

// Lấy giá trị = 1 có key là 'c' từ mảng trên
$value2 = $a['a']['c'];
echo "Giá trị = 1 có key là 'c': " . $value2 . "\n";

// Lấy thông tin của phần tử có key là 'a'
$info = $a['a'];
echo "Thông tin của phần tử có key là 'a':\n";
print_r($info);
?>
