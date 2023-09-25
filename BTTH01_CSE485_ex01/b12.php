<?php
$numbers = [
 'key1' => 12,
 'key2' => 30,
 'key3' => 4,
 'key4' => -123,
 'key5' => 1234,
 'key6' => -12565,
];

// Lấy phần tử đầu tiên và phần tử cuối cùng trong mảng
$firstElement = reset($numbers);
$lastElement = end($numbers);

echo "Phần tử đầu tiên: $firstElement\n";
echo "Phần tử cuối cùng: $lastElement\n";

// Tìm số lớn nhất, số nhỏ nhất, tổng các giá trị từ mảng
$maximum = max($numbers);
$minimum = min($numbers);
$total = array_sum($numbers);

echo "Số lớn nhất: $maximum\n";
echo "Số nhỏ nhất: $minimum\n";
echo "Tổng các giá trị: $total\n";

// Sắp xếp mảng theo chiều tăng và giảm các giá trị
asort($numbers);
echo "Mảng theo chiều tăng giá trị:\n";
print_r($numbers);

arsort($numbers);
echo "Mảng theo chiều giảm giá trị:\n";
print_r($numbers);

// Sắp xếp mảng theo chiều tăng và giảm các key
ksort($numbers);
echo "Mảng theo chiều tăng key:\n";
print_r($numbers);

krsort($numbers);
echo "Mảng theo chiều giảm key:\n";
print_r($numbers);
?>