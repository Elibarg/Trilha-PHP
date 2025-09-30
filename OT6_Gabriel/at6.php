<?php
$conexao = new mysqli("localhost","usuario","senha","banco_de_dados");
if ($conexao->connect_error) die("falha na conexão: ".$conexao->connect_error);