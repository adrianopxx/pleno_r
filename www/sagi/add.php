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

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top" onmouseover="verifica()" onmouseout="verifica()">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="home.php">GEMINI</a>

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
                        <a class="dropdown-item" href="register.html">Entrada</a>
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
              <a href="home.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>

          <!-- Page Content -->
          <h1>Cadastro de Membros</h1>
          <hr>
           <form method="post"action="gravamembro.php" enctype="multipart/form-data" >
    <div class="row">
      <div class="form-group col-md-2">
        <label for="exampleInputEmail1">Matricula</label>
        <?php 
  include("includes/config.php");
$result=mysqli_query($conecta,"SELECT matricula FROM cadastro ORDER BY matricula DESC LIMIT 1");
$resultado=mysqli_fetch_assoc($result);
if (empty($resultado)){

//mensagem de erro

echo "login e senha errados";

// manda o usuario para a tela de login



} else {

// aui eu recolho os dados vindos do banco e coloco no session

// echo $resultado['matricula'];
$proximo=$resultado['matricula'] +1;
// echo $proximo;
$variavel = str_pad($proximo, 4, "0", STR_PAD_LEFT);
echo '<input type="text"class="form-control" id="matricula" name="matricula" value=';
echo $variavel;
echo '>';
}
  ?>
      </div>
    <div class="form-group col-md-6">
        <label for="nome">Nome Completo</label>
        <input type="text"class="form-control" name="nome" id="nome" placeholder="Digite o nome completo">
      </div>
    <div class="form-group col-md-3">
  <label for="funcao">Cargo Eclesiastico:</label>
  <select class="form-control" id="funcao" name ="funcao">
    <option value="Membro">Membro</option>
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
  </select>
  </div>
 </div>
    
  <div class="row">
      <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Nascimento</label>
        <input type="date" name="nascimento" class="form-control" id="nascimento" placeholder="Digite o valor">
      </div>
    <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Identidade</label>
        <input type="text" class="form-control" id="identidade" name ="identidade" placeholder="Digite o Numero da Identidade :">
      </div>
    <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Cpf</label>
        <input type="text" class="form-control" id="cpf" name ="cpf" placeholder="Digite o Numero do CPF">
      </div>
    <div class="form-group col-md-3">
        <label for="sel1">Sexo:</label>
  <select class="form-control" id="sexo" name ="sexo">
    <option value="M">Masculino</option>
    <option value="F">Feminino</option>
  </select>
      </div>
  </div>
  
  <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Mae:</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name ="mae" placeholder="Digite o Nome da Mae">
      </div>
    <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Pai:</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name ="pai" placeholder="Digite o Nome do Pai">
      </div>
  </div>
  
  <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Endereco :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name ="endereco" placeholder="Digite o Endereco">
      </div>
        <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Telefone :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name ="telefone" placeholder="Digite o Telefone">
      </div>
    <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Unidade :</label>
        <!-- aqui deve entrar rastreio de unidade !-->
        <input type="text" class="form-control" id="exampleInputEmail1" name ="unidade" placeholder="Digite o valor">
      </div>
  </div>
    
  <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Observacoes :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Observacoes">
      </div>
    <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Data de Ingresso :</label>
        <input type="date" name="ingresso" class="form-control" id="ingresso" placeholder="Digite o valor">
      </div>
    <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Foto :</label>
        <?php
        //$m=1;
        //echo '<a img src="img/css3.png" class="media-object  img-responsive img-thumbnail" href="view.php?indice='.$m; echo '">Visualizar </a>';echo $m;
        echo'<a href="croppie.php?export='.$variavel.'">' ;echo '<img src="semfoto.png" id="face" height="80" width="80" class="media-object  img-responsive img-thumbnail"><a>';
        ?>  
        
       <!-- <input type="file" class="form-control" id="foto" name ="foto" placeholder="Digite o valor"> !-->
      </div>
  </div>
  <hr />
  
  <div class="row">
    <div class="col-md-12">
      <button type="submit"value ="submit" name  ="submit" class="btn btn-primary">Salvar</button>
    <a href="home.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>

  </form>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Desenvolvido por Adriano Oliveira</span>
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
            <a class="btn btn-primary" href="index.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

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
  <script>
    function verifica() {
      // alert("Imagem enviada com sucesso!");
      console.log (document.getElementById("face").src);
            var valor = "<?php print $variavel; ?>"  // pego do php com print 
          
      document.getElementById("face").src=valor +".jpg"
      console.log (valor);
      var url = valor+".jpg";
    
        console.log (url);

        

    }
  </script>

  </body>

</html>
