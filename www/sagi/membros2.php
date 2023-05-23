<?php
include("includes/config.php");
$matricula =$_GET["indice"];
$result=mysqli_query($conecta,"SELECT * ,DATE_FORMAT(nascimento, '%d/%m/%Y') AS nascimento,DATE_FORMAT(ingresso, '%d/%m/%Y') AS ingresso FROM cadastro WHERE matricula='$matricula' LIMIT 1");
$resultado=mysqli_fetch_assoc($result);
require('fpdf.php');
    $f=$resultado['funcao'] ;
    $pdf = new FPDF();
  $pdf -> AddPage();
	switch ($f) {
		
		case 'Membro' :
	$today = date("Y"); 	
	$t=$today +1;
$pdf -> image('MembrosCarteira2.jpg');
$pdf -> image($resultado['foto'].'.jpg',13,35,21,25);
$pdf -> SetFont('Arial','',8);
$pdf -> Text(37,48,$resultado['identidade']);
$pdf -> Text(83,48,'10/02/'.$t);
$pdf -> Text(37,40,$resultado['nome']);
$pdf -> Text(108,17,$resultado['pai'].' - '.$resultado['mae']);
$pdf -> Text(108,26,$resultado['cpf']);
$pdf -> Text(145,26,$resultado['nascimento']);
$pdf -> Text(166,26,$resultado['ingresso']);
$pdf -> SetFont('Arial','',12);
$pdf -> Text(109,71,$resultado['matricula']);

	
	default :
	$today = date("Y"); 	
	$t=$today +2;   
  $pdf -> image('ObreiroCarteira3.jpg');
$pdf -> image($resultado['foto'].'.jpg',13,35,21,25);
$pdf -> SetFont('Arial','',8);
$pdf -> Text(37,54,$resultado['funcao']);
$pdf -> Text(82,54,'10/02/'.$t);
$pdf -> Text(37,44,$resultado['nome']);
$pdf -> Text(110,17,$resultado['pai'].' - '.$resultado['mae']);
$pdf -> Text(110,26,$resultado['cpf']);
$pdf -> Text(145,26,$resultado['identidade']);
$pdf -> Text(145,35,$resultado['ingresso']);
$pdf -> Text(110,35,$resultado['nascimento']);
$pdf -> Text(168,35,$resultado['matricula']);
$pdf -> Text(186,35,'001');



 
} 

$matricula ='0033';
$result=mysqli_query($conecta,"SELECT * ,DATE_FORMAT(nascimento, '%d/%m/%Y') AS nascimento,DATE_FORMAT(ingresso, '%d/%m/%Y') AS ingresso FROM cadastro WHERE matricula='$matricula' LIMIT 1");
$resultado=mysqli_fetch_assoc($result);

    $f=$resultado['funcao'] ;
	switch ($f) {
		
		case 'Membro' :
	$today = date("Y"); 	
	$t=$today +1;
$pdf -> image('MembrosCarteira2.jpg',10,80);
$pdf -> image($resultado['foto'].'.jpg',13,35,21,25);
$pdf -> SetFont('Arial','',8);
$pdf -> Text(37,48,$resultado['identidade']);
$pdf -> Text(83,48,'10/02/'.$t);
$pdf -> Text(37,40,$resultado['nome']);
$pdf -> Text(108,17,$resultado['pai'].' - '.$resultado['mae']);
$pdf -> Text(108,26,$resultado['cpf']);
$pdf -> Text(145,26,$resultado['nascimento']);
$pdf -> Text(166,26,$resultado['ingresso']);
$pdf -> SetFont('Arial','',12);
$pdf -> Text(109,71,$resultado['matricula']);

	
	default :
	$today = date("Y"); 	
	$t=$today +2;  
    $pdf -> image('ObreiroCarteira3.jpg',10,80);
$pdf -> image($resultado['foto'].'.jpg',13,105,21,25);
$pdf -> SetFont('Arial','',8);
$pdf -> Text(37,125,$resultado['funcao']);
$pdf -> Text(82,125,'10/02/'.$t);
$pdf-> Text(37,114,$resultado['nome']);
$pdf -> Text(110,87,$resultado['pai'].' - '.$resultado['mae']);
$pdf -> Text(110,96,$resultado['cpf']);
$pdf -> Text(145,96,$resultado['identidade']);
$pdf -> Text(145,105,$resultado['ingresso']);
$pdf -> Text(110,105,$resultado['nascimento']);
$pdf -> Text(168,105,$resultado['matricula']);
$pdf -> Text(186,105,'001');


} 

$matricula ='0038';
$result=mysqli_query($conecta,"SELECT * ,DATE_FORMAT(nascimento, '%d/%m/%Y') AS nascimento,DATE_FORMAT(ingresso, '%d/%m/%Y') AS ingresso FROM cadastro WHERE matricula='$matricula' LIMIT 1");
$resultado=mysqli_fetch_assoc($result);

    $f=$resultado['funcao'] ;
	switch ($f) {
		
		case 'Membro' :
	$today = date("Y"); 	
	$t=$today +1;
$pdf -> image('MembrosCarteira2.jpg');
$pdf -> image($resultado['foto'].'.jpg',13,35,21,25);
$pdf -> SetFont('Arial','',8);
$pdf -> Text(37,48,$resultado['identidade']);
$pdf -> Text(83,48,'10/02/'.$t);
$pdf -> Text(37,40,$resultado['nome']);
$pdf -> Text(108,17,$resultado['pai'].' - '.$resultado['mae']);
$pdf -> Text(108,26,$resultado['cpf']);
$pdf -> Text(145,26,$resultado['nascimento']);
$pdf -> Text(166,26,$resultado['ingresso']);
$pdf -> SetFont('Arial','',12);
$pdf -> Text(109,71,$resultado['matricula']);
$pdf -> OutPut();
	
	default :
	$today = date("Y"); 	
	$t=$today +2;  
    $pdf -> image('ObreiroCarteira3.jpg',10,150);
$pdf -> image($resultado['foto'].'.jpg',13,175,21,25);
$pdf -> SetFont('Arial','',8);
$pdf -> Text(37,194,$resultado['funcao']);
$pdf -> Text(82,194,'10/02/'.$t);
$pdf-> Text(37,183,$resultado['nome']);
$pdf -> Text(110,157,$resultado['pai'].' - '.$resultado['mae']);
$pdf -> Text(110,166,$resultado['cpf']);
$pdf -> Text(145,166,$resultado['identidade']);
$pdf -> Text(145,175,$resultado['ingresso']);
$pdf -> Text(110,175,$resultado['nascimento']);
$pdf -> Text(168,175,$resultado['matricula']);
$pdf -> Text(186,175,'001');


} 

$matricula ='0022';
$result=mysqli_query($conecta,"SELECT * ,DATE_FORMAT(nascimento, '%d/%m/%Y') AS nascimento,DATE_FORMAT(ingresso, '%d/%m/%Y') AS ingresso FROM cadastro WHERE matricula='$matricula' LIMIT 1");
$resultado=mysqli_fetch_assoc($result);

    $f=$resultado['funcao'] ;
	switch ($f) {
		
		case 'Membro' :
	$today = date("Y"); 	
	$t=$today +1;
$pdf -> image('MembrosCarteira2.jpg');
$pdf -> image($resultado['foto'].'.jpg',13,35,21,25);
$pdf -> SetFont('Arial','',8);
$pdf -> Text(37,48,$resultado['identidade']);
$pdf -> Text(83,48,'10/02/'.$t);
$pdf -> Text(37,40,$resultado['nome']);
$pdf -> Text(108,17,$resultado['pai'].' - '.$resultado['mae']);
$pdf -> Text(108,26,$resultado['cpf']);
$pdf -> Text(145,26,$resultado['nascimento']);
$pdf -> Text(166,26,$resultado['ingresso']);
$pdf -> SetFont('Arial','',12);
$pdf -> Text(109,71,$resultado['matricula']);
$pdf -> OutPut();
	
	default :
	$today = date("Y"); 	
	$t=$today +2;  
    $pdf -> image('ObreiroCarteira3.jpg',10,220);
$pdf -> image($resultado['foto'].'.jpg',13,245,21,25);
$pdf -> SetFont('Arial','',8);
$pdf -> Text(37,264,$resultado['funcao']);
$pdf -> Text(82,264,'10/02/'.$t);
$pdf-> Text(37,254,$resultado['nome']);
$pdf -> Text(110,228,$resultado['pai'].' - '.$resultado['mae']);
$pdf -> Text(110,237,$resultado['cpf']);
$pdf -> Text(145,237,$resultado['identidade']);
$pdf -> Text(145,245,$resultado['ingresso']);
$pdf -> Text(110,245,$resultado['nascimento']);
$pdf -> Text(168,245,$resultado['matricula']);
$pdf -> Text(186,245,'001');

$pdf -> OutPut();
 $pdf -> OutPut();
} 
?>
