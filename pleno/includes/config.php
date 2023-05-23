<?php
// inicio a sessao

//defino o fuso horario
date_default_timezone_set('America/Sao_Paulo');

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
//$dbhost = 'us-cdbr-east-06.cleardb.net'; // endereco do servidor de banco de dados
$dbhost = 'localhost';
//$dbuser = 'b98ae3bf1e6c2a'; // login do banco de dados
$dbuser = 'root';
//$dbpass = 'f254cf5c'; // senha
$dbpass = '';
//$dbname = 'heroku_5cc8dde3f00171d'; // nome do banco de dados a ser usado
$dbname = '1390662';
$conecta = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


?>
