<?php
include("includes/config.php");
$usuario =$_POST['usuario'];
$senha=$_POST['senha'];
$result=mysqli_query($conecta,"SELECT * FROM usuarios WHERE matricula='$usuario' AND senha='$senha' LIMIT 1");
$resultado=mysqli_fetch_assoc($result);
if (empty($resultado)){

//mensagem de erro

echo "login e senha errados";

// manda o usuario para a tela de login



} else {


header("location:home.php");


}
?>