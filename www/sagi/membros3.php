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
$matricula =$_GET["indice"];
$result=mysqli_query($conecta,"SELECT * ,DATE_FORMAT(nascimento, '%d/%m/%Y') AS nascimento,DATE_FORMAT(ingresso, '%d/%m/%Y') AS ingresso FROM cadastro WHERE matricula='$matricula' LIMIT 1");
$resultado=mysqli_fetch_assoc($result);
require('fpdf.php');
    $f=$resultado['funcao'] ;
	switch ($f) {
		
		case 'Membro' :
	$today = date("Y"); 	
	$t=$today +1;
$pdf = new FPDF();
$pdf -> AddPage();
$pdf -> image('MembrosCarteira2.jpg');
$pdf -> image($resultado['foto'].'.jpg',13,35,21,25);
$pdf -> SetFont('Arial','',8);
$pdf -> Text(37,48,$resultado['identidade']);
$pdf -> Text(83,48,'10/02/'.$t);
$pdf -> Text(37,40,utf8_decode($resultado['nome']));
$pdf -> Text(108,17,utf8_decode($resultado['pai'].' - '.$resultado['mae']));
$pdf -> Text(108,26,$resultado['cpf']);
$pdf -> Text(145,26,$resultado['nascimento']);
$pdf -> Text(166,26,$resultado['ingresso']);
$pdf -> SetFont('Arial','',12);
$pdf -> Text(109,71,$resultado['matricula']);
$pdf -> OutPut();
	Break;
	default :
	$today = date("Y"); 	
	$t=$today +1;
   $pdf = new FPDF();
  $pdf -> AddPage();
  $pdf -> image('ObreiroCarteira3.jpg');
$pdf -> image($resultado['foto'].'.jpg',13,35,21,25);
$pdf -> SetFont('Arial','',8);
$pdf -> Text(37,54,utf8_decode($resultado['funcao']));
$pdf -> Text(82,54,'10/02/'.$t);
$pdf -> Text(37,44,utf8_decode($resultado['nome']));
$pdf -> Text(110,17,utf8_decode($resultado['pai'].' - '.$resultado['mae']));
$pdf -> Text(110,26,$resultado['cpf']);
$pdf -> Text(145,26,$resultado['identidade']);
$pdf -> Text(145,35,$resultado['ingresso']);
$pdf -> Text(110,35,$resultado['nascimento']);
$pdf -> Text(168,35,$resultado['matricula']);
$pdf -> Text(186,35,'001');

$pdf -> OutPut();
 Break;
} 
?>
