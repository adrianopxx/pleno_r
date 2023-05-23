<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');

if(empty($_SESSION['Nome'])) {
  $_SESSION['loginErro'] = "ACESSO RESTRITO";
  header("Location: index.php");
  }


?>
<?php

$matricula = "0001" ;
require('fpdf.php');
   
$a=180;	
$pdf = new FPDF("L","pt","A4");
 $pdf -> AddPage();
$pdf -> image('niver.jpg',1,12,840,0,'','');
$pdf -> SetFont('Arial','B',16);

include("includes/config.php");
$query=mysqli_query($conecta,"SELECT * from cadastro where MONTH(nascimento)=MONTH(now()) AND ativo=1");
while($aux = mysqli_fetch_assoc($query)) { 
	$nasc=explode("-",$aux["nascimento"]);  $nasc =$nasc[2].'/'.$nasc[1]; 
	$pdf -> Text(237,$a,$aux['nome'].'--'.$nasc);    
     $a=$a+18;    
	


 } ; 

//$pdf -> Text(237,48,$resultado['identidade']);
//$pdf -> Text(83,48,'10/02/'.$t);
//$pdf -> Text(108,17,$resultado['pai'].' - '.$resultado['mae']);
//$pdf -> Text(108,26,$resultado['cpf']);
//$pdf -> Text(166,26,$resultado['ingresso']);
//$pdf -> SetFont('Arial','',12);
//$pdf -> Text(109,71,$resultado['matricula']);
$pdf -> OutPut();
	


 

?>
