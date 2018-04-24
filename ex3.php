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
        echo "Код який зберигає дані користувача";echo "<br>";
    }
}

/*$object1       = New User_1;
$object1->name = "Vlad";
$object2       = $object1;
$object2->name = "Sanya";

echo "object1 name = " . $object1->name . "<br>";
echo "object2 name = " . $object2->name . "<br>";

class User_1
{
    public $name;
}
*/
$object1       = New User_1;
$object1->name = "Vlad";
$object2       = clone $object1;
$object2->name = "Sanya";

echo "object1 name = " . $object1->name . "<br>";
echo "object2 name = " . $object2->name . "<br>";

class User_1
{
 public $name;
}

Translate::lookup();
class Translate
{
    const ENGLISH = 0;
    const SPANISH = 1;
    const FRENCH  = 2;
    const GERMAN  = 3;

    Static function lookup()
    {
        echo self::ENGLISH;
    }
}

class Example
{
    var $name   = "Michael"; // Нерекомендована форма, аналогічна public
    public $age = 23;// Відкрита властивість
    protected $usercount;// Захищена властивість
    private function admin() // Закритий метод
    {
        //код закритого методу адмін
    }
}

$temp = new Test();
echo "Test A: " . Test::$static_property . "<br>";
echo "Test B: " . $temp->get_sp() . "<br>";
echo "Test C: " . $temp->static_property . "<br>";
class Test
{
    static $static_property = "Это статическое свойство";

    function get_sp()
    {
        return self::$static_property;
    }
}

echo "<br>";

$object_I = new Subscriber();
$object_I->name = "Vlad";
$object_I->password = "QWERTY";
$object_I->phone = "0956213666";
$object_I->email = "http://WWW.Vovk.com.ua";
$object_I->display();

class User_4
{
    public $name, $password;

    function save_user()
    {
        echo "Код зберігаючий дані користувача";
    }
}

class Subscriber extends User_4
{
    public $phone, $email;

    function display()
    {
        echo "Name : " . $this->name . "<br>";
        echo "Password : " . $this->password ."<br>";
        echo "Phone : " . $this->phone . "<br>";
        echo "Email : " . $this->email . "<br>";
    }
}

echo "<br>";
$tipok = new Son;
$tipok->test();
$tipok->test2();

class Dad
{
    function test()
    {
        echo "[Class Dad] Я твій батя Шура<br>";
    }
}

class Son extends Dad
{
    function test()
    {
        echo "[Class Son] Я Шура<br>";
    }
    function test2()
    {
        parent::test();
    }
}

echo "<br>";
$cat = new tiger();
echo "У тигра є ...<br>";
echo "Лахматий: " . $cat->fur . "<br>";
echo "Полосатий: " . $cat->stripes;


class wild_cat
{
    public $fur;// Коти лахматі тварини

    function __construct()
    {
        $this->fur = "TRUE";
    }
}

class tiger extends wild_cat
{
    public $stripes;// Тигри полосаті

    function __construct()
    {
        parent::__construct();//Першочерговий виклик батьківського конструктора
        $this->stripes = "TRUE";
    }
}