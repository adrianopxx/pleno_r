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

    <title>SAGI - Sistema Automático de Gestão Interna</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">
    <?PHP 



    include("includes/config.php");
    $foo = $_GET["indice"];
            
             $sql = mysqli_query($conecta,"UPDATE cadastro set ativo='1' where matricula='$foo'") or die( mysqli_error($conecta));
                         ?>

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">SUCESSO !</div>
        <div class="card-body">
          <div class="text-center mb-4">
            <h4>REGISTRO REATIVADO !</h4>           
          </div>
          <form>
            <div class="form-group">
              <div class="form-label-group">
                
                              </div>
            </div>
            
          </form>
          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript">
      setTimeout(function() {
    window.location.href = "tablesinativo.php";
}, 1000);

    </script>

  </body>

</html>
