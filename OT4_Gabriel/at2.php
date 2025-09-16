<?php
$a = ["Rússia","Canadá","China","Estados Unidos","Brasil"];
unset($a[2]);
foreach ($a as $key => $value) {
    echo "$key  $value\n";
}

