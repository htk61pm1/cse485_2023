<?php
function calculateOperations($arr) {
    $sum = $arr[0];
    $product = $arr[0];
    $difference = $arr[0];
    $quotient = $arr[0];

    for ($i = 1; $i < count($arr); $i++) {
        $sum += $arr[$i];
        $product *= $arr[$i];
        $difference -= $arr[$i];
        $quotient /= $arr[$i];
    }

    echo "Tổng các phần tử = " . implode(' + ', $arr) . " = " . $sum . "\n";
    echo "Tích các phần tử = " . implode(' * ', $arr) . " = " . $product . "\n";
    echo "Hiệu các phần tử = " . implode(' - ', $arr) . " = " . $difference . "\n";
    echo "Thương các phần tử = " . implode(' / ', $arr) . " = " . $quotient . "\n";
}

$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
calculateOperations($arrs);
?>
