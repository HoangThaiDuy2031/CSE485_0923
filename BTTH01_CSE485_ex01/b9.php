<?php
function convertToLowercase($array) {
    $result = array();
    
    foreach ($array as $element) {
        if (is_integer($element)) {
            $converted = strtolower(strval($element));
        } else {
            $converted = $element;
        }
        
        $result[] = $converted;
    }
    
    return $result;
}

// Áp dụng với mảng ['1', 'B', 'C', 'E']
$arr1 = ['1', 'B', 'C', 'E'];
$result1 = convertToLowercase($arr1);
echo "Mảng ban đầu: ";
print_r($arr1);
echo "Mảng sau khi chuyển: ";
print_r($result1);

// Áp dụng với mảng ['a', 0, null, false]
$arr2 = ['a', 0, null, false];
$result2 = convertToLowercase($arr2);
echo "Mảng ban đầu: ";
print_r($arr2);
echo "Mảng sau khi chuyển: ";
print_r($result2);
?>