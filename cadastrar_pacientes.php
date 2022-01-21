<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$idade = mysqli_real_escape_string($conexao, trim($_POST['idade']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$matricula = mysqli_real_escape_string($conexao, trim($_POST['matricula']));

$sql = "select count(*) as total from paciente where matricula = '$matricula'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['paciente_existe'] = true;
	header('Location: cadastro_pacientes.php');
	exit;
}

$sql = "INSERT INTO paciente (nome, idade, telefone, matricula) VALUES ('$nome', '$idade', '$telefone', '$matricula')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro_paciente.php');
exit;
?>