<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/1
 * Time: 16:55
 */
$a  =   [1,2,3,4,5,6,7,8,9];
$count  =   pow(2,count($a));
$tmp    =   [];
for ($i=1; $i<=$count - 1; $i++){
    $string =   sprintf("%09d", decbin($i));
    $stringArray    =   (str_split($string));
    print_r($stringArray);exit;
    /*
     $tmp    =   [];
     foreach ($stringArray as $key => $value){
        if($value){
            $tmp[]  =   $a[$key];
            $j++;
        }
    }*/

    $z  =   [];
    $b  =   [];
    $c  =   [];
    $d  =   [];
    $e  =   [];
    $f  =   [];
    $g  =   [];
    $h  =   [];
    $j  =   [];
    list($z[],$b[],$c[],$d[],$e[],$f[],$g[],$h[],$j[])  =   $stringArray;
    list($z[],$b[],$c[],$d[],$e[],$f[],$g[],$h[],$j[])  =   $a;
    $z[0] && $tmp[$i][] =   $z[1];
    $b[0] && $tmp[$i][] =   $b[1];
    $c[0] && $tmp[$i][] =   $c[1];
    $d[0] && $tmp[$i][] =   $d[1];
    $e[0] && $tmp[$i][] =   $e[1];
    $f[0] && $tmp[$i][] =   $f[1];
    $g[0] && $tmp[$i][] =   $g[1];
    $h[0] && $tmp[$i][] =   $h[1];
    $j[0] && $tmp[$i][] =   $j[1];
}
print_r($tmp);exit;
//echo $j;
