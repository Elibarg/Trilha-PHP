<?php
$a = ["a","b","c","d","e"];
unset($a[2]);
foreach ($a as $key => $value) {
    echo "$key  $value\n";
}

