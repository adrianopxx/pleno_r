<?php
session_start();
unset($_SESSION['Nome']);
unset($_SESSION['nome']);
unset($_SESSION['usuarioEmail']);
unset($_SESSION['unidade']);
unset($_SESSION['nivel']);
header("Location: index.php");
?>





