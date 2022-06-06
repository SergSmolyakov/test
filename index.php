<?php
$a = 1;
$arr = array(2, 12, 212, 34, 221, 20, 657, 46, 38, 9, 1);

$len = count($arr);
for ($i = 0; $i < $len; $i++){
    if (strrpos($arr[$i], "2") !== false) {
        $len++;
        for ($j = $len - 1; $j > $i; $j--){
                $arr[$j] = $arr[$j-1];
        }        
        $i++;
        $arr[$i] = $a;
    }
}

print_r($arr);