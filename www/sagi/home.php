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
<?
date_default_timezone_set('America/Sao_Paulo');
$date = date('m');
echo $date;


?>


  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'ATIVOS', 'INATIVOS', ],
          ['JAN',  22,      12],
          ['FEV',  21,      13],
          ['MAR',  25,     11],
          ['ABR',  23,      17],
          ['MAI',  21,      22],
          ['JUN',  29,      18],
          ['JUL',  25,      13],
          ['AGO',  21,      11],
          ['SET',  22,      14],
          ['OUT',  25,      21],
          ['NOV',  23,      23],
          ['DEZ',  12,      11]
        ]);

        var options = {
          title : 'MEMBROS ATIVOS',
          vAxis: {title: 'Volume'},
          hAxis: {title: 'Mes'},
          seriesType: 'bars',
          series: {2: {type: 'line'}}        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

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
            <i class="fas fa-print fa-fw"></i>
            
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="aniversa.php">Aniversariantes do mês</a>
            <a class="dropdown-item" href="regcri.php">Cetificado de Apresentação</a>
             <a class="dropdown-item" href="regbat.php">Cetificado de Batismo</a>
              <a class="dropdown-item" href="#">Cetificado de Consagração</a>
            
              <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Lista de Membros</a>
             <a class="dropdown-item" href="#">Lista de Obreiros</a>
             <a class="dropdown-item" href="exibepdf.php">Lista de Presenca Ministerial</a>


          </div>
          
            
          
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-print fa-fw"></i>
            
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="aniversa.php">Aniversariantes do mês</a>
            <a class="dropdown-item" href="regcri.php">Cetificado de Apresentação</a>
             <a class="dropdown-item" href="regbat.php">Cetificado de Batismo</a>
              <a class="dropdown-item" href="#">Cetificado de Consagração</a>
            
              <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Lista de Membros</a>
             <a class="dropdown-item" href="#">Lista de Obreiros</a>
          </div>
          
            
          
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Carta de Apresentação</a>
             <a class="dropdown-item" href="#">Carta de Mudança</a>
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
            <h5><p id="time" style="color:white;"> </p>
    </h5>
    <!--<a href="sair.php"> Sair <a/>-->
    <script>
            var timeDisplay = document.getElementById("time");

            function refreshTime() {
                var dateString = new Date().toLocaleString("pt-BR", {
                    timeZone: "America/Sao_Paulo"
                });
                var formattedString = dateString.replace(", ", " - ");
                timeDisplay.innerHTML = formattedString;
            }

            setInterval(refreshTime, 1000);
            </script>

          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Menu </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Livro Caixa:</h6>
                        <a class="dropdown-item" href="register.php">Entrada</a>
                        
            <a class="dropdown-item" href="saida.php">Saida</a>
            <a class="dropdown-item" href="register.php">Balancete</a>
           
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Secretaria:</h6>
            <a class="dropdown-item" href="add.php">Cadastrar Membro</a>
            <a class="dropdown-item" href="blank.html">Disciplinar Membro</a>
            <a class="dropdown-item" href="blank.html">Excluir Membro</a>

          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="referendar.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Avaliar Desempenho</span></a>
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
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Resumo</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <?php
                  include("includes/config.php");
                 $sql = mysqli_query($conecta,"SELECT * FROM cadastro where ativo=1") or die( mysqli_error($conecta));
                 $total = mysqli_num_rows($sql);
                                  echo '<div class="mr-5">',$total,' Membros!</div>';
                                 
?>
                                    
                </div>
                <a class="card-footer text-white clearfix small z-1" href="tables.php">
                  <span class="float-left">Ver Detalhes</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <?php
                  include("includes/config.php");
                 $sql = mysqli_query($conecta,"SELECT * FROM tarefas WHERE finalizada='0'") or die( mysqli_error($conecta));
                 $total = mysqli_num_rows($sql);
                 $n1=$total;
                                                   echo '<div class="mr-5">'.$n1.' Tarefas!</div>';
                                                    ?>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Ver Detalhes</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <?php
                  include("includes/config.php");
                                   $sql = mysqli_query($conecta,"SELECT SUM(valor) AS total FROM entradas") or die( mysqli_error($conecta));
                 $total = mysqli_fetch_row($sql);
                 $n1=$total[0];
                 $sql2 = mysqli_query($conecta,"SELECT SUM(valor) AS total FROM saidas") or die( mysqli_error($conecta));
                 $total = mysqli_fetch_row($sql2);
                 $n2=$total[0];
                 $n3= $n1 - $n2;

                                                   echo '<div class="mr-5"> R$ ',number_format($n3, 2, ',', '.'),' Em Caixa!</div>';
?>
                                 </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Ver Detalhes</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <?php
                  include("includes/config.php");
                 $sql = mysqli_query($conecta,"SELECT * FROM cadastro WHERE ativo='0'") or die( mysqli_error($conecta));
                 $total = mysqli_num_rows($sql);
                 $n1=$total;
                                                   echo '<div class="mr-5">'.$n1.' Membros Inativos!</div>';
                                                  
?>
                                  </div>
                <a class="card-footer text-white clearfix small z-1" href="tablesinativo.php">
                  <span class="float-left">Ver Detalhes</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-mars"></i>
                  </div>
                  <?php
                  include("includes/config.php");
                 $sql = mysqli_query($conecta,"SELECT * FROM cadastro WHERE ativo='1' and sexo='M'") or die( mysqli_error($conecta));
                 $total = mysqli_num_rows($sql);
                 $n1=$total;
                                                   echo '<div class="mr-5">'.$n1.' Total de Homens!</div>';
                                                  
?>
                                  </div>
                <a class="card-footer text-white clearfix small z-1" href="tables.php">
                  <span class="float-left">Ver Detalhes</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-venus"></i>
                  </div>
                  <?php
                  include("includes/config.php");
                 $sql = mysqli_query($conecta,"SELECT * FROM cadastro WHERE ativo='1'AND sexo='F'") or die( mysqli_error($conecta));
                 $total = mysqli_num_rows($sql);
                 $n1=$total;
                                                   echo '<div class="mr-5">'.$n1.' Total de Mulheres!</div>';
                                                  
?>
                                  </div>
                <a class="card-footer text-white clearfix small z-1" href="tables.php">
                  <span class="float-left">Ver Detalhes</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-users"></i>
                  </div>
                  <?php
                  include("includes/config.php");
                 $sql = mysqli_query($conecta,"SELECT * FROM cadastro WHERE ativo='1'AND funcao <>'Membro'") or die( mysqli_error($conecta));
                 $total = mysqli_num_rows($sql);
                 $n1=$total;
                                                   echo '<div class="mr-5">'.$n1.' Total de Obreiros!</div>';
                                                  
?>
                                  </div>
                <a class="card-footer text-white clearfix small z-1" href="tables.php">
                  <span class="float-left">Ver Detalhes</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-handshake"></i>
                  </div>
                  <?php
                  include("includes/config.php");
                 $sql = mysqli_query($conecta,"SELECT * FROM cadastro WHERE ativo='0'") or die( mysqli_error($conecta));
                 $total = mysqli_num_rows($sql);
                 $n1=$total;
                                                   echo '<div class="mr-5">'.$n1.' Departamentos!</div>';
                                                  
?>
                                  </div>
                <a class="card-footer text-white clearfix small z-1" href="tables.php">
                  <span class="float-left">Ver Detalhes</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Movimento do Mês</div>
           
              <div id="chart_div" style="width: 900px; height: 500px;"></div>
              
            


            
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              ANIVERSARIANTES DO MÊS  <a href="aniversa.php"><button style="background: #069cc2; border-radius: 6px; padding: 8px; cursor: pointer; color: #fff; border: none; font-size: 16px;">IMPRIMIR LISTAGEM</button></a>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
        <tr>
          <th>Matricula</th>
          <th>Nome</th>
          <th>Funcao</th>
          <th>Lotação</th>
          <th class="actions">Dia</th>
        </tr>
      </thead>
      <tbody>
      <tr>
    
<?php
$nome="";
if (isset($_GET["pesquisa"])) {
    $nome = $_GET["pesquisa"];

    IF ($nome <> '' ) {echo 'RESULTADOS ENCONTRADOS PARA :'.$nome.'';};
}
 $pesquisa='%'.$nome.'%';

include("includes/config.php");
// $query = mysqli_query($conecta,"SELECT * FROM cadastro WHERE nascimento BETWEEN '1984-01-05' AND '1985-01-31' ") or die( mysqli_error($conecta));
$query=mysqli_query($conecta,"SELECT * from cadastro where MONTH(nascimento)=MONTH(now()) AND ativo=1");
while($aux = mysqli_fetch_assoc($query)) { echo '<td>';echo $aux["matricula"].""; echo '</td>';
echo '<td>';echo $aux["nome"].""; echo '</td>';
echo '<td>';echo $aux["funcao"].""; echo '</td>';
echo '<td>';echo $aux["unidade"].""; echo '</td>';
$m=$aux["matricula"];

echo '<td>'; $nasc=explode("-",$aux["nascimento"]);  $nasc = $nasc[2] ; echo $nasc;                     
          
            
            
            echo '</td>';
echo '</tr>';
          

 } ; 


?>    
        
          
        
      </tbody>
                  
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

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
