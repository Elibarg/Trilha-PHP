<?php
echo date("d/m/y\nh:m:s")
?>

<?php

function data(){

    return  date("d/m/y\nh: i: s");
}
$a = data();
echo "$a";
?>