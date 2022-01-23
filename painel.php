<?php
 if(!isset($_SESSION)) 
 { 
    session_start(); 
 } 
include('verifica_login.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>Painel Inicial</title>
		<link rel="stylesheet" type="text/css" href="css/painel.css">
	</head>
	<body>
		<div class="box">
			<h1>Importar Pacientes do Arquivo TXT</h1>
			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>
			<form method="POST" action="processa_txt.php" enctype="multipart/form-data">
				<label>Arquivo</label>
				<input type="file" name="arquivo"><br><br>
				<input type="submit" value="Importar">
			</form><br><br>
			<h2><a href="pacientes.php">Visualizar Pacientes</a></h2></button>
			<h2><a href="logout.php">Sair</a></h2>
		</div>
	</body>
</html>


