<?php
include("conexao.php");

$consulta = "SELECT * FROM paciente";
$con = mysqli_query($conexao, $consulta) or die($mysqli->error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 class="title has-text-grey">Informações de Pacientes</h3>
    <a href="painel.php">Pagina Inicial</a>
    <table border = "1">
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Idade</td>
            <td>Telefone</td>
            <td>Matricula</td>
            <td>Ação</td>
        </tr>
        <?php while ($dado = $con->fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["id_paciente"];?></td>
            <td><?php echo $dado["nome"];?></td>
            <td><?php echo $dado["idade"];?></td>
            <td><?php echo $dado["telefone"];?></td>
            <td><?php echo $dado["matricula"];?></td>
            <td><a href="editar_paciente.php?id_paciente=<?php echo $dado["id_paciente"]; ?>">Editar</a>|
            <a href="excluir_paciente.php?id_paciente=<?php echo $dado["id_paciente"]; ?>">Excluir</a>|</td>
        </tr>  
           
        <?php } ?>
    </table>
    <div class="has-text-grey">
        <a href="cadastro_paciente.php">Cadastrar</a>
    </div>   
    
    
</body>
</html>