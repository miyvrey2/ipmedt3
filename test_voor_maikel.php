<?php

$array1 = array(
    'koffie' => 2,
    'melk' => 5,
    'suiker' => 1,
);

$array2 = array(
    'koffie' => 5,
);

$newArray = array_merge_recursive($array1, $array2);

$j = 0;
foreach ($newArray as $k => $v){

    if(is_array($v)){
        $count = 0;
        for($i = 0; $i <= count($count); $i += 1){
            $count += $v[$i];
        }
    } else {
        $count = $v;
    }

    $return[$k] = $count;
    $j += 1;
}

print_r($return);
echo $return['koffie'];