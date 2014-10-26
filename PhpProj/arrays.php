<?php
    function compare($n1, $n2)
    {
        if ($n1 % 2 < $n2 % 2)
            return -1;
        if ($n1 % 2 > $n2 % 2)
            return 1;
        if ($n1 == $n2)
            return 0;
        return ($n1 < $n2) ? -1 : 1;
    }

    $arr = array("Green" => "Yellow", "Yellow" => "Blue", "Blue" => "Orange", "Orange" => "Green", 1 => "Car", 7, 2.5, -11, 100, -4.33);

    $arr[count($arr)] = "First added";

    $arr["Second added key"] = "Second added";

    print_r($arr);

    $arrCopy = $arr;

    asort($arrCopy);
    print_r($arrCopy);

    krsort($arrCopy);
    print_r($arrCopy);

    sort($arrCopy);
    print_r($arrCopy);

    rsort($arrCopy);
    print_r($arrCopy);

    print_r(array_rand($arrCopy, 4));

    $numbers = array(10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0);

    usort($numbers, 'compare');
    print_r($numbers);
?>