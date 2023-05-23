<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>INTEGRA - SISTEMA GERENCIADOR MINISTERIAL</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">

        <div class="card-header">INTEGRA - Login</div>
        <div class="card-body">

                    	<form class="form-signin" method="POST" action="valida.php">

                        
        <h2 class="form-signin-heading text-center"><img src="logo.png" width="160" height="160" ></h2>

                <label for="inputEmail" class="sr-only">Usuário</label>
		
        <input type="text" name="usuario" class="form-control" placeholder="Digitar o Usuário" required autofocus><br />
		
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite a Senha" required >
        <br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button> 
      </form>
          <div class="text-center">
            
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
