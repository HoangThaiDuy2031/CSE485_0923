<?php
function convertToUppercase($array) {
    $result = array();
    
    foreach ($array as $element) {
        if (is_integer($element)) {
            $converted = $element;
        } else {
            $converted = strtoupper($element);
        }
        
        $result[] = $converted;
    }
    
    return $result;
}

// Áp dụng với mảng ['1', 'b', 'c', 'd']
$arr1 = ['1', 'b', 'c', 'd'];
$result1 = convertToUppercase($arr1);
echo "Mảng ban đầu: ";
print_r($arr1);
echo "Mảng sau khi chuyển: ";
print_r($result1);

// Áp dụng với mảng ['a', 0, null, false]
$arr2 = ['a', 0, null, false];
$result2 = convertToUppercase($arr2);
echo "Mảng ban đầu: ";
print_r($arr2);
echo "Mảng sau khi chuyển: ";
print_r($result2);
?>