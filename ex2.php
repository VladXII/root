<?php
/*$temp = "Дата : ";
echo $temp . longdate(time());
function longdate($timestamp)
{
return date("l jS Y", $timestamp);
}*/
$temp = " Дата : ";
echo lorgdate($temp, time());
function lorgdate($text, $timestamp)
{
    return $text . date("l jS y", $timestamp);
}
global $IS_LOGGED_IN;
$IS_LOGGED_IN = true;
$IS_LOGGED_IN ? print " U are authorized user\n" : print " U are guest\n";
function test()
{
    static $count = 0;
    echo $count;
    $count++;
}
echo test();
echo test();
$came_from = $_SERVER['HTTP_REFERRER'];


