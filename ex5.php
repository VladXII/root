<?php

$a = [
    'first' => 1,
    'second' => 2,
];

extract($a);


$now = new DateTime();

echo $now->format("F z l");