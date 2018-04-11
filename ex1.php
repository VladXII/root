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
for($m = 0; $m <= 10; ++$m) {
    $res = $m%3;
    echo "<li>$res</li>";
}