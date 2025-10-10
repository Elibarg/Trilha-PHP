<!-- 5. Crie um array com nomes de três cores diferentes. Utilize um loop foreach para
percorrer o array e exibir cada cor. -->

<?php
  $array = array(
        "cor1" => "verde",
        "cor2" => "rosa",
        "cor3" => "preto",
    );
    foreach ($array as $key => $value) {
        echo "Key: $key => Value: $value\n";
    }
?>

