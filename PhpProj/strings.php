<?php

function solve($s, $reqlen)
{
    if (strlen($s) > $reqlen)
    {
        $sarr = explode(" ", chunk_split($s, $reqlen, " "));
        print_r($sarr);
    }
    else
    {
        $sres = substr($s, 0, ((int)strlen($s)) / 2);

       // print($sres . "\n");
        $formres = "<b><i>" . $sres;

        $newfromres = substr_replace($formres, "<br>", 8, 0);

        $nonTags = strip_tags($newfromres);
        print($nonTags . "\n");
        print(strrev($nonTags) . "\n");
        print($formres  . "\n");
        print($newfromres . "\n");
    }

}


$arr = array("go", 1, "went", -4.44, "gone");

$str = implode($arr, "");

solve($str, 1000);
?>