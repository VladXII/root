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
echo $names_2[0] . " " . $names_2[1] . " " . $names_2[2] . "<br>";

function fix_names_2($n1, $n2 ,$n3)
{
$n1 = ucfirst(strtolower($n1));
$n2 = ucfirst(strtolower($n2));
$n3 = ucfirst(strtolower($n3));
return array($n1, $n2, $n3);
}

$b1 = "vLAd";
$b2 = "vLaD";
$b3 = "PoberZniChENko";

echo $b1 . " " . $b2 . " " . $b3 . "<br>";
fix_names_3($b1, $b2, $b3);
echo $b1 . " " . $b2 . " " .$b3;

function fix_names_3(&$n1, &$n2 , &$n3)
{
  $n1 = ucfirst(strtolower($n1));
  $n2 = ucfirst(strtolower($n2));
  $n3 = ucfirst(strtolower($n3));
}

$c1 = "mARiYa";
$c2 = "sANya";
$c3 = "mCGReGor";

echo "<br>";
echo $c1 . " " . $c2 . " " . $c3 . "<br>";
fix_names_4();
echo $c1 . " " . $c2 . " " . $c3;

function fix_names_4()
{
    global $c1; $c1 = ucfirst(strtolower($c1));
    global $c2; $c2 = ucfirst(strtolower($c2));
    global $c3; $c3 = ucfirst(strtolower($c3));
}

echo "<br>";
/*include "ex1.php";
include_once "ex1.php";
include "ex1.php";
require_once "index.php";
require_once "index.php";*/

echo "<br>";
if (function_exists("array_combine")) echo "It's available\n";
else echo "not available\n";

echo phpversion();
echo "<br>";
/*
$object = New User;
print_r($object);

class User
{
    public $name, $password;

    function save_user()
    {
        echo "Мій код";
    }
}
*/

$object = New User;
print_r($object); echo "<br>";

$object->name = "Alex";
$object->password = "mentor";
print_r($object); echo "<br>";

$object->save_user();

class User
{
    public $name, $password;

    function save_user()
    {
        echo "Код який зберигає дані користувача";
    }
}