<?php
function binarySearch($arr, $left, $right, $input){
    if($right >= $left){
        $mid = ceil($left + ($right - $left) / 2);
        if($arr[$mid] == $input){
            return floor($mid);
        }
        if($arr[$mid] > $input){
            return binarySearch($arr, $left, $mid -1, $input);
        }
        return binarySearch($arr, $mid + 1, $right, $input);
    }
    return -1;
}


$arr = array(10,13,22,36,37,55,86,97);
$index = count($arr);
$input = 37;
$result = binarySearch($arr, 0, $index-1, $input);
if(($result == -1)){
    echo "Element is not present in array";
}else{
    echo "Element is present at index ", $result;
}
?>