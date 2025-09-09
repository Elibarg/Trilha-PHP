<?php

function reversed(){
    $string = ("This is a reversed string");

    return strrev($string);
}
$a = reversed();
echo "$a";
?>