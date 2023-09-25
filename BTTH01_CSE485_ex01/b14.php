<?php
$array1 = [
 [77, 87],
 [23, 45]
];
$array2 = [
 'giá trị 1', 'giá trị 2'
];

$result = [];

// Gộp hai mảng dựa trên key của từng mảng
for ($i = 0; $i < count($array1); $i++) {
    $result[$i] = array_merge([$array2[$i]], $array1[$i]);
}

// Hiển thị kết quả
print_r($result);
?>