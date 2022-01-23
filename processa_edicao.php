<?php
session_start();
include_once("conexao.php");

$id_paciente = $_POST["id"];
$nome = $_POST["nome"];
$idade = $_POST["idade"];;
$telefone = $_POST["telefone"];;
$matricula = $_POST["matricula"];;

$sql = "UPDATE paciente SET nome='$nome', idade='$idade',  telefone ='$telefone', matricula='$matricula' WHERE id_paciente ='$id_paciente'";
$resultado = mysqli_query($conexao, $sql);

if(mysqli_affected_rows($conexao)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: pacientes.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: editar_paciente.php?id_paciente=$id_paciente");
}
