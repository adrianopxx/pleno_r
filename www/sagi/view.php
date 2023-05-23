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

    
    <title>INTEGRA - Sistema Automático de Gestão Interna</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="home.php">INTEGRA</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Aniversariantes do mês</a>
            <a class="dropdown-item" href="#">Contas a Pagar</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Outras Pendências</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Cadastrar Usuário</a>
            <a class="dropdown-item" href="#">Remover Usuário</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Sair</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Menu </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Tesouraria:</h6>
                        <a class="dropdown-item" href="register.php">Entrada</a>
            <a class="dropdown-item" href="forgot-password.html">Saida</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Secretaria:</h6>
            <a class="dropdown-item" href="add.php">Cadastrar Membro</a>
            <a class="dropdown-item" href="blank.html">Disciplinar Membro</a>
            <a class="dropdown-item" href="blank.html">Excluir Membro</a>

          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Estatísticas</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Cadastros</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>

          <!-- Page Content -->
          
                    <h3 class="page-header">Consulta de Membros</h3>
          <hr>
  <?php
$foo = $_GET["indice"];
include("includes/config.php");
$query = mysqli_query($conecta,"SELECT * ,DATE_FORMAT(nascimento, '%d/%m/%Y') AS nascimento,DATE_FORMAT(ingresso, '%d/%m/%Y') AS ingresso FROM cadastro where matricula='$foo'") or die( mysqli_error($conecta));
while($aux = mysqli_fetch_assoc($query)) {  
 echo ' <div class="row">
    <div class="col-md-4">
      <p><strong></strong></p>
      <p><img src="'.$aux["matricula"].'.jpg" class="img-fluid" alt="SEM FOTO" width="153" height="208"></p>
    </div>';
  echo '
 <div class="col-md-4">
      <p><strong>Nome</strong></p>
      <p>'.$aux["nome"].' </p>
    </div>';
  
  echo ' 
  <div class="col-md-4">
      <p><strong>Nascimento :</strong></p>
      <p>'.$aux["nascimento"].'</p>
    </div>

    <div class="col-md-4">
      <p><strong>Endereço</strong></p>
      <p>'.$aux["endereco"].'</p>
    </div>
  
  <div class="col-md-4">
      <p><strong>Membro desde :</strong></p>
      <p>'.$aux["ingresso"].'</p>
    </div>
  
  <div class="col-md-4">
      <p><strong>Matricula</strong></p>
      <p>'.$aux["matricula"].'</p>
    </div>
  
    <div class="col-md-4">
      <p><strong>Rg :</strong></p>
      <p>'.$aux["identidade"].'</p>
    </div>
  
  <div class="col-md-4">
      <p><strong>CPF :</strong></p>
      <p>'.$aux["cpf"].'</p>
    </div>
  
  <div class="col-md-4">
      <p><strong>Unidade :</strong></p>
      <p>'.$aux["unidade"].'</p>
    </div>
 
    <div class="col-md-8">
      <p><strong>Filiacao :</strong></p>
      <p> '.$aux["mae"].' - '.$aux["pai"].'
  </p>
    </div>
    
  <div class="col-md-4">
      <p><strong>Cargo Eclesiastico</strong></p>
      <p>'.$aux["funcao"].'</p>
    </div>
 
    <div class="col-md-8">
      <p><strong>Observacoes</strong></p>
      <p>'.$aux["observacoes"].'</p>
    </div>
 </div>';
 $m=$aux["matricula"];
};
?>
 
 <hr />
 <div id="actions" class="row">
   <div class="col-md-12">
     <p><a href="tables.php" class="btn btn-primary">Voltar</a>
       <?php echo '<a href="edit.php?indice='.$m; echo '" class="btn btn-success ">Editar</a>'; ?>
     <?php echo '<a href="membros.php?indice='.$m; echo '" class="btn btn-primary ">Gerar Credencial</a>'; ?>
          <?php echo '<a href="certificado.php?indice='.$m; echo '" class="btn btn-primary ">Gerar Cerificado</a>'; ?>
          <?PHP $f=1;?>                   
     <?php echo '<a href="#?indice='.$m; echo '" class="btn btn-danger" data-toggle="modal" data-target="#deletemodal">Excluir</a></p> ' ;$c=1;

        ?>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
   </div>
 </div>
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
         <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Desenvolvido por Adriano Oliveira </span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deseja Sair?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Clique em "Logout" abaixo para sair.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="sair.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- delete modal -->

    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deseja Excluir? </h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Pressione SIM Para Excluir.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">NÃO</button>
                        <?php echo '<a class="btn btn-success" href="esclusao.php?indice='.$m; echo '" class="btn btn-primary ">SIM</a>'; ?>

          </div>
        </div>
      </div>
    </div>

    <!--ok modal -->

   

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
