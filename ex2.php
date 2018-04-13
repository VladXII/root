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
global $is_logged_in;
$is_logged_in ? print " U are authorized user\n" : print " U are guest\n";