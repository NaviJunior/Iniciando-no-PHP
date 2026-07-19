<?php

define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '12345678');
define('DB', 'estudophp');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB);

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}