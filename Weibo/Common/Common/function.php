<?php
/**
 * Created by PhpStorm.
 * User: richie
 * Date: 2016/7/24
 * Time: 12:34
 */
function checkLength($str , $min, $max){
    preg_match_all('/./u',$str,$matches);
    $len=count($matches[0]);
    if($len < $min || $len > $max){
        return false;
    }else{
        return true;
    }
}