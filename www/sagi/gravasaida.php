    <!DOCTYPE html>
<html lang="en">

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


$data = $_POST["data"];
$valor = $_POST["valor"];
$observacoes = $_POST["observacoes"];

echo $valor;
$sqlinsert = "INSERT INTO saidas (data,valor,observacao) VALUES ('$data','$valor','$observacoes')";
$sql = mysqli_query($conecta,$sqlinsert);
// inicia a conexao ao servidor de banco de dados


mysqli_close($conecta);

?>
  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registrar Saida</div>
        <div class="text-center">
<br>
<p style="font-weight:bold;">GRAVADO COM SUCESSO!!!</p>

</br>

</div>
        <div class="card-body">
         
         <div class="text-center">
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