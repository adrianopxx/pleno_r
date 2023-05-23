
<?php

	


//define('FPDF_FONTPATH', 'font/');
require('fpdf.php');


//conex�o com banco de dados
include("includes/config.php");
//pesquisar na tabela

// para exibir todos os registrosuse esse select : $sql="SELECT * FROM users ";

$sql=("SELECT * FROM cadastro Where funcao <> 'membro' and ativo ='1' order by id asc "); //exibe o registro espec�fico
$busca = mysqli_query($conecta, $sql);



$pdf = new FPDF();
$pdf->AddPage("P");
$pdf->SetFont('Arial','B',17);
$pdf->Cell(190,0,utf8_decode('FICHA DE PRESENÇA MINISTERIAL'),0,0,"C");
$pdf->SetFont('Arial','B',9);
$pdf->Cell(-190,18,utf8_decode('DATA:__________/______________/_____________'),0,0,"C");



//exibir imagem no pdf
$pdf->Image('bat.png',10,4,30,21,'PNG');
$pdf->Image('ad.png',168,4,30,20,'PNG');

//$pdf->Image('bat.jpg',10,8,22);

$pdf->ln(15); // espa�amento entra linhas de 15 mm


$pdf->SetFont('Arial','B',8);
//$pdf->Cell(30, 5,'Dt. Hora',1,0,"C");
$pdf->Cell(20, 10,'MATRICULA',1,0,"C");
$pdf->Cell(70, 10,'NOME',1,0,"C");
$pdf->Cell(30, 10,'FUNCAO',1,0,"C");
$pdf->Cell(70, 10,'ASSINATURA',1,0,"C");
//$pdf->Cell(35, 5,'Setor',1,0,"C");
//$pdf->Cell(18, 5,'Andar',1,0,"C");
//$pdf->Cell(55, 5,'Liberador',1,0,"C");


$pdf->ln(); //nenhum espa�amentos entre linhas


while ($resultado = mysqli_fetch_array($busca)) {

    //echo $resultado['nome'];
  //  $res=date ("d/m/Y H:i:s", strtotime($resultado['datahora']));
  //  $pdf->Cell(30, 5, $res,1,0,"C");
    $pdf->Cell(20, 10, utf8_decode($resultado['matricula']),1,0,"C");
    $pdf->Cell(70, 10, utf8_decode($resultado['nome']),1,0,"C");
    $pdf->Cell(30, 10, utf8_decode($resultado['funcao']),1,0,"C");
    $pdf->Cell(70, 10, utf8_decode($resultado['identificacao']),1,0,"C");
    //$pdf->Cell(35, 5, utf8_decode($resultado['setor']),1,0,"C");
    //$pdf->Cell(18, 5, utf8_decode($resultado['andar']),1,0,"C");
  //  $pdf->Cell(55, 5, utf8_decode($resultado['liberador']),1,0,"C");


   $pdf->Ln();
    
};
for ($i=0; $i <3 ; $i++) { 
  $pdf->Cell(20, 10, utf8_decode(''),1,0,"C");
  $pdf->Cell(70, 10, utf8_decode(''),1,0,"C");
  $pdf->Cell(30, 10, utf8_decode(''),1,0,"C");
  $pdf->Cell(70, 10, utf8_decode(''),1,0,"C");
  $pdf->Ln();

};

$pdf->Output();
?>