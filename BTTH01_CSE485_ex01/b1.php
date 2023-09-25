<?php
    $arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];

    function tinhtong($arr){
        $tong = array_sum($arr);
        return $tong;
    }

    function tinhtich($arr){
        $tich = array_product($arr);
        return $tich;
    }

    $tong = tinhTong($arrs);
    $tich = tinhtich($arrs);
    echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $tong . "<br>";
    echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $tich . "<br>";
?>