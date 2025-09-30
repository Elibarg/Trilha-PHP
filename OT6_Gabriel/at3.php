<?php
$host = "localhost";
$user = "usuario";
$pass = "senha";
$db = "banco_de_dados";
$conexao = new mysqli($host,$user,$pass,$db);
if ($conexao->connect_error) die("falha na conexão: ".$conexao->connect_error);
