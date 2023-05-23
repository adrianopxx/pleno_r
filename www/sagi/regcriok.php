    <!DOCTYPE html>
<html lang="en">
<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');

if(empty($_SESSION['Nome'])) {
  $_SESSION['loginErro'] = "ACESSO RESTRITO";
  header("Location: index.php");
  }


?>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GEMINI - Gerenciador Estratégico Ministerial</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>
    <?php
include("includes/config.php");
include ("includes/WideImage.php");


$apresentacao= $_POST["entrada"];
$nasc = $_POST["valor"];
$nome = $_POST["observacoes"];
$mae = $_POST["mae"];
$pai = $_POST["pai"];
$registro="202101180501";
//ano,codigo da operação (01 -ca,02-cb,03-co),dia,mes,numero de ordem

//ECHO now(y);

$sqlinsert = "INSERT INTO cert_emitidos(dataentrada,nascimento,nome,mae,pai,registro) VALUES ('$apresentacao','$nasc','$nome','$mae','$pai','$registro')";
$sql = mysqli_query($conecta,$sqlinsert);
// inicia a conexao ao servidor de banco de dados


mysqli_close($conecta);

?>
  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registrar Entradas</div>
        <div class="text-center">
<br>
<p style="font-weight:bold;">GRAVADO COM SUCESSO!!!</p>

</br>

</div>
        <div class="card-body">
         
         <div class="text-center">
          <a class="btn btn-success" href="registrocrianca.php">EMITIR CERTIFICADO</a>
            <a class="btn btn-success" href="home.php">VOLTAR</a>
                     </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>