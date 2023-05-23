
<?php
include("includes/config.php");
$result = mysqli_query($conecta,"SELECT * FROM membros WHERE YEAR(nascimento) = '2004'");
while($exibe = mysqli_fetch_assoc($result)){
  echo $exibe['nome'] .'<br>'; echo $exibe['nascimento'] .'<br>';
}
?>