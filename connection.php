<?php

$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = '';
$db_db = 'projeto_music';

$connection = mysqli_connect($db_host, $db_user, $db_password,$db_db) or die ('Erro ao conectar ao Banco de Dados');

?>