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
$author = 'Vlad';
echo "</br>";
echo "developers, developers, developers
      developers, developers!
      
- $author.";
  $text = "Measuring programming progress by lines of cod
  is like measuring aircraft building by weight.
- $author.";
$author = "Vova";
echo <<<_EN
Debugging is twice as hard as writing the code in the first place.
Therefore, if you write the code as cleverly as possible, you are,
by definition, not smart enough to debug it.
- $author.
_EN;
$text_2 = <<<_end
Normal people believe if it ain't broke ,don't fix it.
Engineers believe if it ain't broke , it does not have 
enough features yet.

- $author
_end;
echo "<br/>";
echo $text_2;
$number = 2313*2203;
echo "<br/>";
echo substr($number, 3, 1);

