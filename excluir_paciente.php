<?php
session_start();
include("conexao.php");
$id_paciente = intval($_GET["id_paciente"]);

$sql = "DELETE FROM paciente where id_paciente = '$id_paciente'";
$result = mysqli_query($conexao, $sql);

if($result) {
	header('Location: pacientes.php');
	exit;
}
else{
    echo "não foi possível excluir paciente";
}

$conexao->close();

?>