<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$maxLengthString = $array[0];
$minLengthString = $array[0];

foreach ($array as $string) {
    $length = strlen($string);
    
    if ($length > strlen($maxLengthString)) {
        $maxLengthString = $string;
    }
    
    if ($length < strlen($minLengthString)) {
        $minLengthString = $string;
    }
}

echo "Chuỗi lớn nhất là $maxLengthString, độ dài = " . strlen($maxLengthString) . "\n";
echo "Chuỗi nhỏ nhất là $minLengthString, độ dài = " . strlen($minLengthString) . "\n";
?>