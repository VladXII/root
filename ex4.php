<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 25.04.18
 * Time: 10:31
 */
// Додавання елементів в масив
/*$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

print_r($paper);

$paper[0] = "bear";
$paper[1] = "vodka";
$paper[2] = "absent";
$paper[3] = "water";

echo "<br>";
print_r($paper);*/

$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

for($j = 0; $j < 4; ++$j)
{
    $k++;
    echo "$k : $paper[$j]<br>";
}

$paper_1['copier'] = "Copier & Multipurpose";
$paper_1['inkjet'] = "Inject Printer";
$paper_1['laser'] = "Laser Printer";
$paper_1['Photo'] = "Photographic paper";

echo $paper_1['laser'];

$p1 = array('Copier', 'Inkjet', ' Laser', 'Photo');

echo "<br>Елемент массива p1 : " . $p1[2] . "<br>";

$p2 = array('Copier' => "Copier & Multipurpose",
            'Inkjet' => "Inkjet Printer",
            'laser'  => "Laser Printer",
            'Photo'  => "Photographic Paper");

echo "Елемент массива p2 : " . $p2['Inkjet'] . "<br>";

$t = 0;

foreach ($p2 as $item)
{
    echo "<br>$t Елемент массива p2 :" . $item . "<br>";
    ++$t;
}

foreach ($p2 as $item => $description)
{
     echo "<br>$item : $description<br>";
}

while (list($index,$desc) = each($p2))
    echo "<br>$index : $desc<br>";

$products = array(
           'paper' => array(
                'copier' => "Copier & Multipurpose",
                'inkjet' => "Inkjet Printer",
                'laser'  => "Laser Printer",
                'photo'  => "Photographic Paper"),
            'pens' => array(
                'ball'   => "Ball Point",
                'hilite' => "Highlighters",
                'marker' => "Markers"),
            'misc' => array(
                'tape'   => "Sticky Tape",
                'glue'   => "Adhesive",
                'clips'  => "Paperclips")
);

echo "<pre>";

foreach ($products as $section => $item)
    foreach ($item as $key => $value)
        echo "$section:\t$key\t($value)<br>";

echo "</pre>";

echo $products['misc']['tape'];

$chess_board = array(
    array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
    array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
    array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')
);

echo "<pre>";

foreach ($chess_board as $row)
{
    foreach ($row as $piece)
        echo "$piece";
    echo "<br>";
}

echo "</pre>";

