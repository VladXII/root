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
if     ($page == "Home") echo "Ви вибрали Home";
elseif ($page == "About") echo "Ви вибрали About";
elseif ($page == "News") echo "Ви вибрали News";
elseif ($page == "Login") echo "Ви вибрали Login";
elseif ($page == "Links") echo "Ви вибрали Links";
switch ($page) {
    case "Home":
        echo "Ви вибрали Home";
        break;
    case "About":
        echo "Ви вибрали About";
        break;
    case "News":
        echo "Ви вибрали News";
        break;
    case "Login":
        echo "Ви вибрали Login";
        break;
    case "Links":
        echo "Ви вибрали Links";
        break;
    default:
        echo "Сторінка не розпізнана";
        break;
}
echo $fuel <= 1 ? "дозаправка необхідна" : "Топлива ще достатньо";
$enough = $fuel <= 1 ? FALSE : TRUE;
$saved = $saved >= $new ? $saved : $new;
$fuel = 10;
while ($fuel > 1) {
    echo "Топлива ще достатньо";
    echo $fuel;
    if ($fuel) $fuel--;
}
echo "Пора заправлятись Шура!!!!";
$count = 1;
while ($count <= 12) {
    echo "Число $count, помножене на  12, рівне " . $count * 12 . "<br>";
    $count++;
}
$count = 0;
while (++$count <= 12) {
    echo "Число $count, помножене на  12, рівне " . $count * 12 . "<br>";
}
$count = 1;
do {
    echo "Число $count, умноженное на 12, равно " . $count * 12 . "<br>";
    echo "<br>";
}while (++$count <= 12);

