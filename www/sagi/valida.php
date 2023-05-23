<?php
	session_start();	
	
	include("includes/config.php");	
	$usuario =$_POST['usuario'];
	$senha=$_POST['senha'];
			
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result=mysqli_query($conecta,"SELECT * FROM usuarios WHERE matricula='$usuario' AND senha='$senha' LIMIT 1");
		$resultado=mysqli_fetch_assoc($result);
		
		
		
		if(isset($resultado)){
					$_SESSION['Nome'] = $resultado['matricula'];
							 
					  
			//echo $_SESSION['Nome'];
			
			
			//switch ($resultado['nivel']){
				//case '1':
					//header("Location:painel.php");
			  // break;
			  // default:
				header("Location: home.php");
		//   break;
				//};
			 
					
		}else{	
			
			$_SESSION['loginErro'] = "USUÁRIO OU SENHA INVÁLIDO";
			
			header("Location: index.php");
		}
?>


