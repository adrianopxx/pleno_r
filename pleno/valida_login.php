<?php
include("includes/config.php");
$usuario =$_POST['usuario'];
$senha=$_POST['senha'];
$unidade=$_POST['unidade'];
session_start();

$result=mysqli_query($conecta,"SELECT * FROM cadastro WHERE matricula='$usuario' AND pwd='$senha' AND unidade='$unidade' LIMIT 1");
$resultado=mysqli_fetch_assoc($result);
if (empty($resultado)){

//mensagem de erro

echo "login e senha errados";
$sqlinsert = "INSERT INTO logs (hora,indice,texto) VALUES ('12 hs', 'text-danger','Tentativa de acesso negado ao sistema')";
$sql = mysqli_query($conecta,$sqlinsert);

// manda o usuario para a tela de login



} else {
    date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m-H:i');
$log=$usuario.' Logado com sucesso';
    $sqlinsert = "INSERT INTO logs (hora,indice,texto) VALUES ('$date', 'text-success','$log')";
$sql = mysqli_query($conecta,$sqlinsert);
    $_SESSION['id'] = $usuario;
header("location:home.php");


}
?>