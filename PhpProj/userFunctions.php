<?php
    include_once 'binPower.php';
    require_once 'mergeSort.php';

    print(bin_power(2, 1000000000, 1000) . "\n");
    $arr = array(3 , -100 , 4, 15, 61, -76, 245, 124, 3, 40, 32335, -20010);

    //mergeSortNums($arr);
    print_r(mergeSortNums($arr));

?>