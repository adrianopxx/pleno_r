<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');

if(empty($_SESSION['Nome'])) {
  $_SESSION['loginErro'] = "ACESSO RESTRITO";
  header("Location: index.php");
  }


?>
<?php
include("includes/config.php");
$result_avaliacos = "SELECT * FROM cert_emitidos WHERE id = (select max(id) from cert_emitidos);";
$resultado_avaliacos = mysqli_query($conecta, $result_avaliacos); 
$row = mysqli_fetch_array($resultado_avaliacos);
$id = $row["id"];
$dataentrada = $row["dataentrada"];
$nascimento = $row["nascimento"];
$nome = $row["nome"];
$mae = $row ["mae"];
$pai = $row ["pai"];
$amb = $row ["registro"];
$nasc = date('d/m/Y', strtotime($nascimento)); 
$entrada = date('d/m/Y', strtotime($dataentrada)); 
require('fpdf.php');
   
	
$pdf = new FPDF("L","pt","A4");
 $pdf -> AddPage();
$pdf -> image('certcri.jpg',1,12,845,0,'','');
$pdf -> SetFont('Arial','B',15);


$pdf -> Text(349,246,$entrada);
$pdf -> Text(420,355,utf8_decode($mae));
$pdf -> Text(380,382,utf8_decode($pai));
//$pdf -> Text(108,26,utf8_decode($nome));

$pdf -> SetFont('Times','B',20);
$tam = strlen($nome)*10;
$media=500-$tam/2;
$pdf -> Text($media,300,utf8_decode($nome));
$pdf -> OutPut();
	


 

?>
