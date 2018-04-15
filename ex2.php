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
$came_from = htmlentities($_SERVER['HTTP_REFERRER']);
echo "<br>";
echo "a: [" . (20 > 9) . "]<br> ";
echo "b: [" . (5 == 6) . "]<br> ";
echo "c: [" . (1 == 0) . "]<br> ";
echo "d: [" . (1 == 1) . "]<br> ";
echo "a: [" . TRUE . "]<br> ";
echo "b: [" . FALSE . "]<br> ";
$day_number = 346;
$days_to_new_year = 366 - $day_number;
if ($days_to_new_year < 30) {
    echo "Скоро Новый год!";
}
echo "<br>";
$a = "1000";
$b = "+1000";
if ($a == $b) echo "1";
if ($a === $b) echo "2";
echo "<br>";
$a = "1000";
$b = "+1000";
if ($a != $b) echo "1";
if ($a !== $b) echo "2";
$a = 2; $b = 3;
echo "<br>";
if ($a > $b) echo "a більше б <br>";
if ($a < $b) echo "a менше б <br>";
if ($a == $b) echo "a рівне б <br>";
$a = 1; $b = 1;
echo ($a AND $b) . "<br>";
echo ($a or $b) . "<br>";
echo ($a XOR $b) . "<br>";
echo !$a . "<br>";
/*if ($bank_balance < 100) {
    $money
        = 1000;
    $bank_balance += $money;
}
if ($bank_balance < 100)
{
    $money
        = 1000;
    $bank_balance += $money;
}
else {
    $savings
        += 50;
    $bank_balance -= 50;
}
*/
if ($bank_balance < 100)
{
    $money
        = 1000;
    $bank_balance += $money;
}
elseif ($bank_balance > 200)
{
    $savings
        += 100;
    $bank_balance -= 100;
}
else {
    $savings
        += 50;
    $bank_balance -= 50;
}




