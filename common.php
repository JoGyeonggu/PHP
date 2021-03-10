<?php

    /*
        README => 원하는 길이만큼 랜덤 문자열 출력
        $length => Int
    */
    function GenerateString($length)
    {
        $characters  = "0123456789";

        $string_generated = "";

        $nmr_loops = $length;
        while ($nmr_loops--)
        {
            $string_generated .= $characters[mt_rand(0, strlen($characters) - 1)];
        }

        return $string_generated;
    }

    /*
        README => 문자열 출력<br> 처리
        $str => String
    */
    function echo2($str)
    {
        echo $str."<br>";
    }

    /*
        README => 배열 출력<pre> 처리
        $arr => Array
    */
    function print_r2($arr)
    {
        echo "<pre>";
        print_r2($arr);
        echo "</pre>";
    }



?>
