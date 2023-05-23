<?php
// *** fazer as confs. padrão e importar a biblioteca

session_start();
date_default_timezone_set('America/Sao_Paulo');
include("includes/config.php");
$nome ="cofee,brown,caffeine";
$nomes= explode(",",$nome);
// fazer a query e puxar os dados 
$x=0;
$m=20;
require('fpdf.php');
$pdf = new FPDF();
$pdf -> AddPage();
$pdf->SetFont('Arial','B',16);
$query=mysqli_query($conecta,"SELECT * from cadastro where MONTH(nascimento)=MONTH(now()) AND ativo=1");
while($aux = mysqli_fetch_assoc($query)) {
$x++;
    
   // echo $aux["funcao"]; echo $x;echo '<br />';
    $f=$aux['funcao'] ;


    switch ($f) {
        case 'Membro':
            $pdf -> image('MembrosCarteira2.jpg');
            break;
        
        default:
        $pdf -> image('MembrosCarteira2.jpg',8,$m);
        //$pdf -> image('ObreiroCarteira3.jpg');
        $m=$m+80;
            break;
    };
  
   $pdf -> OutPut();
};

// sequenciar

// separar do que se trata 






?>