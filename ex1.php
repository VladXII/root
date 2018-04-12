<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 11.04.18
 * Time: 14:08
 */
$username = "Vlad Pobereznichenko";
echo $username;
echo "<br/>";
$current_user = $username;
echo $current_user;
$team = array("Anne", "Bill", "Bob", "Ben", "Brian");
echo "<br/>";
$el = count($team);
foreach($team as $people) {
    print "<li>$people</li>";
}
    echo "$team[1] ";
    echo  $el;
$xo = [['0', '1', '2'],
       ['3', '4', '5'],
       ['6', '7', '8']];
foreach($xo as $x) {
    print $x;
}
echo "<br/>";
echo $xo[1][0] ;
echo "<br/>";
echo  $xo[1][1];
echo 3%2;
$el += 1;
print $el;
$k = 1;
echo "<br/>";
echo $k .= 4;
for($m = 1; !($m == 20) ; ++$m) {
    $res = $m;
    echo "<li>$res</li>";
}
for($m =1 ; $m <= 20 && !($m ==19); ++$m) {
    if (!($m % 2 == 1)) {
        echo "finish<br/>";
    } else {
        $res = $m;
        echo "$res<br/>";
    }
}
/*$ammonia = "One";
$breach = "two";
$ingradient = $breach xor $breach;
$ingradient = "$ammonia $breach";
echo $ingradient;*/
$y = 0;
if ($y--==0) echo $y;
$messages = 1;
If ($messages == 1) $ms = "Повідомлення";
else $ms = "Повідомлень";
echo "<br/>";
echo "У вас " . $messages . " $ms сер";
$bullet = "Help ";
$art = "me";
echo "<br/>";
echo $bullet .= $art;
echo ' my spelling\'s';
echo "date\tName\tPayment";