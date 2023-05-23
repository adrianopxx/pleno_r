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

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registrar Criança</div>
        <div class="card-body">
          <form class="form-signin" method="POST" action="regcriok.php" >
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">

                    <input type="date" id="entrada" class="form-control" name="entrada" required="required">
                    <label for="entrada">Data Apresentação</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="valor" class="form-control" placeholder="Last name" name="valor" required="required" >
                    <label for="valor">Data de Nascimento</label>
                  </div>
                </div>
              </div>

            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="observacoes" class="form-control" placeholder="Email address" name="observacoes">
                <label for="observacoes">Nome da Criança</label>
              </div><br>
                              </div>
              <div class="form-label-group">              
                <input type="text" id="mae" class="form-control" placeholder="mae" name="mae">
                <label for="mae">Mãe</label>
                              </div><br>
              <div class="form-label-group">
                                <input type="text" id="pai" class="form-control" placeholder="pai" name="pai">
                <label for="pai">Pai</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  
                </div>
                <div class="col-md-6">
                  
                </div>
              </div>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">REGISTRAR</button> 
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="home.php">CANCELAR</a>
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
