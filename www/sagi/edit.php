
<!DOCTYPE html>
<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');

if(empty($_SESSION['Nome'])) {
  $_SESSION['loginErro'] = "ACESSO RESTRITO";
  header("Location: index.php");
  }


?>
<html lang="pt-br">

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

      <a class="navbar-brand mr-1" href="index.html">INTEGRA</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
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
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item active" href="blank.html">Blank Page</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
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
          <div id="main" class="container-fluid">
  
  <h3 class="page-header">&nbsp;</h3>
         
          
          <h3 class="page-header">Editar Membro</h3>
  <hr>
  <form method="post"action="atualizamembro.php" enctype="multipart/form-data" >
   <?php
$foo = $_GET["indice"];
include("includes/config.php");
$query = mysqli_query($conecta,"SELECT * FROM cadastro where matricula='$foo'") or die( mysqli_error($conecta));
while($aux = mysqli_fetch_assoc($query)) {  
echo '<div class="row">
      <div class="form-group col-md-2">
        <label for="exampleInputEmail1">Matricula</label>
    <input type="text"class="form-control" id="matricula" name="matricula" value="'.$aux["matricula"].'">
      </div>
    <div class="form-group col-md-6">
        <label for="nome">Nome Completo</label>
        <input type="text"class="form-control" name="nome" value="'.$aux["nome"].'"id="nome">
      </div>
    <div class="form-group col-md-3">
  <label for="funcao">Cargo Eclesiastico:</label>'; 
    
    switch ($aux["funcao"]) {
    case 'Membro':
         echo '<select class="form-control" id="funcao" name ="funcao">
    <<option value="Membro" selected>Membro</option>
    <option value="Auxiliar de Trabalho">Auxiliar de Trabalho</option>
    <option value="Obreira">Obreira</option>
    <option value="Diacono">Diacono</option>
    <option value="Diaconiza">Diaconiza</option>
    <option value="Presbitero">Presbitero</option>
    <option value="Missionario">Missionario</option>
    <option value="Missionaria">Missionaria</option>
  <option value="Evangelista">Evangelista</option>
    <option value="Pastor">Pastor</option>
    <option value="Pastora">Pastora</option>
    <option value="Bispo">Bispo</option>
    <option value="Bispa">Bispa</option>
    <option value="Membro">Membro</option>
  
  </select>
  </div>
 </div>';
  echo'
  </select>
      </div>
  </div>';
        break;
      case 'Auxiliar de Trabalho':
                  echo '<select class="form-control" id="funcao" name ="funcao">
    <<option value="Auxiliar de Trabalho" selected>Auxiliar de Trabalho</option>
    <option value="Auxiliar de Trabalho">Auxiliar de Trabalho</option>
    <option value="Obreira">Obreira</option>
    <option value="Diacono">Diacono</option>
    <option value="Diaconiza">Diaconiza</option>
    <option value="Presbitero">Presbitero</option>
    <option value="Missionario">Missionario</option>
    <option value="Missionaria">Missionaria</option>
  <option value="Evangelista">Evangelista</option>
    <option value="Pastor">Pastor</option>
    <option value="Pastora">Pastora</option>
    <option value="Bispo">Bispo</option>
    <option value="Bispa">Bispa</option>
     <option value="Membro">Membro</option>
  
  </select>
  </div>
 </div>';
  echo'
  </select>
      </div>
  </div>';
   break;
      case 'Obreira':
                 echo '<select class="form-control" id="funcao" name ="funcao">
    <<option value="Obreira" selected>Obreira</option>
    <option value="Auxiliar de Trabalho">Auxiliar de Trabalho</option>
    <option value="Obreira">Obreira</option>
    <option value="Diacono">Diacono</option>
    <option value="Diaconiza">Diaconiza</option>
    <option value="Presbitero">Presbitero</option>
    <option value="Missionario">Missionario</option>
    <option value="Missionaria">Missionaria</option>
  <option value="Evangelista">Evangelista</option>
    <option value="Pastor">Pastor</option>
    <option value="Pastora">Pastora</option>
    <option value="Bispo">Bispo</option>
    <option value="Bispa">Bispa</option>
     <option value="Membro">Membro</option>
  
  </select>
  </div>
 </div>';
  echo'
  </select>
      </div>
  </div>';
        break;  case 'Diacono':
                  echo '<select class="form-control" id="funcao" name ="funcao">
    <<option value="Diacono" selected>Diacono</option>
    <option value="Auxiliar de Trabalho">Auxiliar de Trabalho</option>
    <option value="Obreira">Obreira</option>
    <option value="Diacono">Diacono</option>
    <option value="Diaconiza">Diaconiza</option>
    <option value="Presbitero">Presbitero</option>
    <option value="Missionario">Missionario</option>
    <option value="Missionaria">Missionaria</option>
  <option value="Evangelista">Evangelista</option>
    <option value="Pastor">Pastor</option>
    <option value="Pastora">Pastora</option>
    <option value="Bispo">Bispo</option>
    <option value="Bispa">Bispa</option>
     <option value="Membro">Membro</option>
  
  </select>
  </div>
 </div>';
  echo'
  </select>
      </div>
  </div>';
        break;  case 'Diaconiza':
                 echo '<select class="form-control" id="funcao" name ="funcao">
    <<option value="Diaconiza" selected>Diaconiza</option>
    <option value="Auxiliar de Trabalho">Auxiliar de Trabalho</option>
    <option value="Obreira">Obreira</option>
    <option value="Diacono">Diacono</option>
    <option value="Diaconiza">Diaconiza</option>
    <option value="Presbitero">Presbitero</option>
    <option value="Missionario">Missionario</option>
    <option value="Missionaria">Missionaria</option>
  <option value="Evangelista">Evangelista</option>
    <option value="Pastor">Pastor</option>
    <option value="Pastora">Pastora</option>
    <option value="Bispo">Bispo</option>
    <option value="Bispa">Bispa</option>
     <option value="Membro">Membro</option>
  
  </select>
  </div>
 </div>';
  echo'
  </select>
      </div>
  </div>';
        break;  case 'Presbitero':
                 echo '<select class="form-control" id="funcao" name ="funcao">
    <<option value="Presbitero" selected>Presbitero</option>
    <option value="Auxiliar de Trabalho">Auxiliar de Trabalho</option>
    <option value="Obreira">Obreira</option>
    <option value="Diacono">Diacono</option>
    <option value="Diaconiza">Diaconiza</option>
    <option value="Presbitero">Presbitero</option>
    <option value="Missionario">Missionario</option>
    <option value="Missionaria">Missionaria</option>
  <option value="Evangelista">Evangelista</option>
    <option value="Pastor">Pastor</option>
    <option value="Pastora">Pastora</option>
    <option value="Bispo">Bispo</option>
    <option value="Bispa">Bispa</option>
     <option value="Membro">Membro</option>
  
  </select>
  </div>
 </div>';
  echo'
  </select>
      </div>
  </div>';
        break;  case 'Missionario':
                 echo '<select class="form-control" id="funcao" name ="funcao">
    <<option value="Missionario" selected>Missionario</option>
    <option value="Auxiliar de Trabalho">Auxiliar de Trabalho</option>
    <option value="Obreira">Obreira</option>
    <option value="Diacono">Diacono</option>
    <option value="Diaconiza">Diaconiza</option>
    <option value="Presbitero">Presbitero</option>
    <option value="Missionario">Missionario</option>
    <option value="Missionaria">Missionaria</option>
  <option value="Evangelista">Evangelista</option>
    <option value="Pastor">Pastor</option>
    <option value="Pastora">Pastora</option>
    <option value="Bispo">Bispo</option>
    <option value="Bispa">Bispa</option>
     <option value="Membro">Membro</option>
  
  </select>
  </div>
 </div>';
  echo'
  </select>
      </div>
  </div>';
        break;  case 'Missionaria':
                 echo '<select class="form-control" id="funcao" name ="funcao">
    <<option value="Missionaria" selected>Missionaria</option>
    <option value="Auxiliar de Trabalho">Auxiliar de Trabalho</option>
    <option value="Obreira">Obreira</option>
    <option value="Diacono">Diacono</option>
    <option value="Diaconiza">Diaconiza</option>
    <option value="Presbitero">Presbitero</option>
    <option value="Missionario">Missionario</option>
    <option value="Missionaria">Missionaria</option>
  <option value="Evangelista">Evangelista</option>
    <option value="Pastor">Pastor</option>
    <option value="Pastora">Pastora</option>
    <option value="Bispo">Bispo</option>
    <option value="Bispa">Bispa</option>
     <option value="Membro">Membro</option>
  
  </select>
  </div>
 </div>';
  echo'
  </select>
      </div>
  </div>';
        break;  case 'Pastor':
                echo '<select class="form-control" id="funcao" name ="funcao">
    <<option value="Pastor" selected>Pastor</option>
    <option value="Auxiliar de Trabalho">Auxiliar de Trabalho</option>
    <option value="Obreira">Obreira</option>
    <option value="Diacono">Diacono</option>
    <option value="Diaconiza">Diaconiza</option>
    <option value="Presbitero">Presbitero</option>
    <option value="Missionario">Missionario</option>
    <option value="Missionaria">Missionaria</option>
  <option value="Evangelista">Evangelista</option>
    <option value="Pastor">Pastor</option>
    <option value="Pastora">Pastora</option>
    <option value="Bispo">Bispo</option>
    <option value="Bispa">Bispa</option>
     <option value="Membro">Membro</option>
  
  </select>
  </div>
 </div>';
  echo'
  </select>
      </div>
  </div>';
        break;  case 'Pastora':
                 echo '<select class="form-control" id="funcao" name ="funcao">
    <<option value="Pastora" selected>Pastora</option>
    <option value="Auxiliar de Trabalho">Auxiliar de Trabalho</option>
    <option value="Obreira">Obreira</option>
    <option value="Diacono">Diacono</option>
    <option value="Diaconiza">Diaconiza</option>
    <option value="Presbitero">Presbitero</option>
    <option value="Missionario">Missionario</option>
    <option value="Missionaria">Missionaria</option>
  <option value="Evangelista">Evangelista</option>
    <option value="Pastor">Pastor</option>
    <option value="Pastora">Pastora</option>
    <option value="Bispo">Bispo</option>
    <option value="Bispa">Bispa</option>
     <option value="Membro">Membro</option>
  
  </select>
  </div>
 </div>';
  echo'
  </select>
      </div>
  </div>';
        break;  case 'Bispo':
                  echo '<select class="form-control" id="funcao" name ="funcao">
    <<option value="Bispo" selected>Bispo</option>
    <option value="Auxiliar de Trabalho">Auxiliar de Trabalho</option>
    <option value="Obreira">Obreira</option>
    <option value="Diacono">Diacono</option>
    <option value="Diaconiza">Diaconiza</option>
    <option value="Presbitero">Presbitero</option>
    <option value="Missionario">Missionario</option>
    <option value="Missionaria">Missionaria</option>
  <option value="Evangelista">Evangelista</option>
    <option value="Pastor">Pastor</option>
    <option value="Pastora">Pastora</option>
    <option value="Bispo">Bispo</option>
    <option value="Bispa">Bispa</option>
     <option value="Membro">Membro</option>
  
  </select>
  </div>
 </div>';
  echo'
  </select>
      </div>
  </div>';
        break;  case 'Bispa':
                  echo '<select class="form-control" id="funcao" name ="funcao">
    <<option value="Bispa" selected>Bispa</option>
    <option value="Auxiliar de Trabalho">Auxiliar de Trabalho</option>
    <option value="Obreira">Obreira</option>
    <option value="Diacono">Diacono</option>
    <option value="Diaconiza">Diaconiza</option>
    <option value="Presbitero">Presbitero</option>
    <option value="Missionario">Missionario</option>
    <option value="Missionaria">Missionaria</option>
  <option value="Evangelista">Evangelista</option>
    <option value="Pastor">Pastor</option>
    <option value="Pastora">Pastora</option>
    <option value="Bispo">Bispo</option>
    <option value="Bispa">Bispa</option>
     <option value="Membro">Membro</option>
  
  </select>
  </div>
 </div>';
  echo'
  </select>
      </div>
  </div>';
        break;
   
    };
  echo '  
  <div class="row">
      <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Nascimento</label>
        <input type="date"class="form-control" name="nascimento" value="'.$aux["nascimento"].'"id="nascimento">
      </div>
    <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Identidade</label>
        <input type="text" class="form-control" id="identidade" name ="identidade" value="'.$aux["identidade"].'" placeholder="Digite o Numero da Identidade :">
      </div>
    <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Cpf</label>
        <input type="text" class="form-control" id="cpf" name ="cpf" value="'.$aux["cpf"].'" placeholder="Digite o Numero do CPF">
      </div>
    <div class="form-group col-md-3">
        <label for="sel1">Sexo:</label>';
    switch ($aux["sexo"]) {
    case 'M':
         echo '<select class="form-control" id="sexo" name ="sexo">
    <option value="M" selected>Masculino </option>
    <option value="F">Feminino  </option>';
  echo'
  </select>
      </div>
  </div>';
        break;
    case 'F':
        echo '<select class="form-control" id="sexo" name ="sexo">
    <option value="M">Masculino</option>
    <option value="F" selected>Feminino  </option>';
  echo'
  </select>
      </div>
  </div>';
        break;
    }
 
    
  
  echo '
  
  <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Mae:</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name ="mae" value="'.$aux["mae"].'" placeholder="Digite o Nome da Mae">
      </div>
    <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Pai:</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name ="pai" value="'.$aux["pai"].'" placeholder="Digite o Nome do Pai">
      </div>
  </div>
  
  <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Endereco :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name ="endereco"value="'.$aux["endereco"].'" placeholder="Digite o Endereco">
      </div>
        <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Telefone :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name ="telefone" value="'.$aux["telefone"].'"placeholder="Digite o Telefone">
      </div>
    <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Unidade :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name ="unidade" value="'.$aux["unidade"].'"placeholder="Digite o valor">
      </div>
  </div>
    
  <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Observacoes :</label>
               <input type="text" class="form-control" id="observacoes" name ="observacoes" value="'.$aux["observacoes"].'"">
      </div>
    <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Data de Ingresso :</label>
        <input type="date"class="form-control" name="ingresso" value="'.$aux["ingresso"].'"id="ingresso">
      </div>
    <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Foto :</label>
        <input type="file" class="form-control" id="foto" name ="foto" placeholder="Digite o valor">
      </div>
  </div>';
};
?>
    
  <hr />
  
  <div class="row">
    <div class="col-md-12">
      <button type="submit"value ="submit" name  ="submit" class="btn btn-primary">Salvar</button>
    <a href="home.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>

  </form>
</div>
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
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
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="sair.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>
