<?php
session_start();

//Incluir a conexao com BD
include_once("conexao.php");

//Receber os dados do formulário
//$arquivo = $_FILES['arquivo'];
//var_dump($arquivo);
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];

//ler todo o arquivo para um array
$dados = file($arquivo_tmp);
//var_dump($dados);

foreach($dados as $linha){
	$linha = trim($linha);
	$valor = explode(',', $linha);
	var_dump($valor);
	
	$nome = $valor[0];
	$idade = $valor[1];
	$telefone = $valor[2];
	$matricula = $valor[3];
	
	$result_usuario = "INSERT INTO paciente (nome, idade, telefone, matricula) VALUES ('$nome', '$idade', '$telefone', '$matricula')";
	
	$resultado_usuario = mysqli_query($conexao, $result_usuario);	
}
$_SESSION['msg'] = "<p style='color: green;'>Carregado os dados com sucesso!</p>";
header("Location:painel.php");



