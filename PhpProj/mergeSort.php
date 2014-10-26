<?php


function pushLastWithCheck(&$res, &$arr, &$isArrFinished = 0)
{
    $res[count($res)] = current($arr);
    $isArrFinished = (next($arr) === false);
}

function mergeArrays(&$left,&$right)
{
    $res = array();

    reset($left);
    reset($right);
    $isEndedLeft = (count($left) == 0);
    $isEndedRight = (count($right) == 0);
    while (!$isEndedLeft or !$isEndedRight)
    {
        if ($isEndedLeft)
            pushLastWithCheck($res, $right, $isEndedRight);
        else
        if ($isEndedRight)
            pushLastWithCheck($res, $left, $isEndedLeft);
        else
            (current($left) < current($right)) ? pushLastWithCheck($res, $left, $isEndedLeft) : pushLastWithCheck($res, $right, $isEndedRight);
    }

    //print_r($res);
    return $res;
}

function mergeSortNums(array $arr)
{
    $arrLength = count($arr);
    if ($arrLength <= 1)
        return $arr;

    $partSize = 0;
    if ((((int)$arrLength) % 2 == 1))
        $partSize = (int)($arrLength / 2) + 1;
    else
        $partSize = (int)($arrLength / 2);

    $parts = array_chunk($arr, $partSize);
    $sortedPartLeft = mergeSortNums($parts[0]);
    $sortedPartRight = mergeSortNums($parts[1]);

    $res =  mergeArrays($sortedPartLeft, $sortedPartRight);
    return $res;
}

?>