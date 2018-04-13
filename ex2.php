<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 13.04.18
 * Time: 12:07
 */
$temp = "Дата : ";
echo $temp . longdate(time());
function longdate($timestamp)
{
return date("l jS Y", $timestamp);
}