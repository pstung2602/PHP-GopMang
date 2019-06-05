<?php
$arr1 = [1, 2, 3, 4, 5, 6, 7, 8];
$arr2 = [2, 3, 4];
$arr3 = [];
for ($i = 0; $i < count($arr1); $i++) {
    array_push($arr3, $arr1[$i]);
}
for($j=0;$j<count($arr2);$j++){
    array_push($arr3, $arr2[$j]);
}
var_dump($arr3);


?>