<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 21.04.18
 * Time: 15:00
 */
print(ucfirst(strtolower("i wAS aN engInERr aNd nOW I leArN pHP\n ")));
print ucfirst(strtolower("coMe tO mE\n"));
echo fix_names("tERRens", "claUS", "mOOdy");
function fix_names($n1, $n2 ,$n3)
{
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
    return  " $n1 " . "$n2 " . "$n3 ";

}
$names_2 = fix_names_2("boBBy", "cAnE", "mARtin");
echo $names_2[0] . " " . $names_2[1] . " " . $names_2[2];
function fix_names_2($n1, $n2 ,$n3)
{
$n1 = ucfirst(strtolower($n1));
$n2 = ucfirst(strtolower($n2));
$n3 = ucfirst(strtolower($n3));
return array($n1, $n2, $n3);
}
