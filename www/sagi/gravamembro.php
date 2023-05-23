    <?php
include("includes/config.php");
include ("includes/WideImage.php");

$matricula = $_POST["matricula"];

$nome = $_POST["nome"];

$nascimento = $_POST["nascimento"];

$sexo = $_POST["sexo"];

$pai = $_POST["pai"];

$mae = $_POST["mae"];


$identidade = $_POST["identidade"];

$cpf = $_POST["cpf"];

$endereco = $_POST["endereco"];

$funcao = $_POST["funcao"];

$ingresso = $_POST["ingresso"];

$unidade = $_POST["unidade"];

$telefone = $_POST["telefone"];



$email = $_POST["email"];
$sqlinsert = "INSERT INTO cadastro (matricula,nome,nascimento,sexo,pai,mae,identidade,cpf,endereco,funcao,ingresso,unidade,telefone,email,foto,ativo) VALUES ('$matricula', '$nome','$nascimento','$sexo','$pai','$mae','$identidade','$cpf','$endereco','$funcao','$ingresso','$unidade','$telefone','$email','$matricula','1')";
$sql = mysqli_query($conecta,$sqlinsert);
// inicia a conexao ao servidor de banco de dados

echo "<br />Gravado com Sucesso!";

// Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = '';
 
// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
 
// Array com as extensões permitidas
$_UP['extensoes'] = array('jpg', 'png', 'gif');
 
// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
$_UP['renomeia'] = false;
 
// Array com os tipos de erros de upload do PHP

$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
 
// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['foto']['error'] != 0) {
die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['foto']['error']]);
exit; // Para a execução do script
echo 'sem foto ';
}
 
// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
 
// Faz a verificação da extensão do arquivo
$extensao = strtolower(end(explode('.', $_FILES['foto']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {
echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
}
 
// Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['foto']['size']) {
echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
}
 
// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
else {
// Primeiro verifica se deve trocar o nome do arquivo
if ($_UP['renomeia'] == true) {
// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
$nome_final = time().'.jpg';
} else {
// Mantém o nome original do arquivo
$nome_final = $_POST["matricula"].'.jpg';
}
 
// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['foto']['tmp_name'], $_UP['pasta'] . $nome_final)) {
// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
echo "Upload efetuado com sucesso!";
echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
} else {
// Não foi possível fazer o upload, provavelmente a pasta está incorreta
echo "Não foi possível enviar o arquivo, tente novamente";
echo 'sem foto';
}
 
}

 
mysqli_close($conecta);

?>
  