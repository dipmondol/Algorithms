<?php 
    function search($arr, $input){
        $n = sizeof($arr);
        for($i = 0; $i < $n; $i++){
            if($arr[$i] == $input){
                return $i;
            }
            
        } 
        return -1;
    }
    $arr = array(12,86,32,71,9,3);
    $input = 3;

    $output = search($arr, $input);
    if($output == -1){
        echo "Number is not present in array";
    }else{
        echo "Number is present at index ", $output;
    }



    ?>

    