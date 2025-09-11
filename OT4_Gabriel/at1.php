<?php
  $a = array(
    "título" => "ab",
    "autor" => "cv",
    "ano" => "34"
);
$a['editora'] = "aev";
foreach ($a as $key => $value) {
    echo "$key  $value\n";
}
?>