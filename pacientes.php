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
    <style>
        body{
            background-image:linear-gradient(45deg, rgb(194, 238, 238),rgb(139, 212, 235));
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lista de Pacientes</title>
</head>
<body>
    <h1 class="title" style="text-align:center">Informações de Pacientes</h1>
    <a class="btn btn-secondary" href="painel.php">Pagina Inicial</a>
    <a class="btn btn-success" href="cadastro_paciente.php">Cadastrar</a>
    <div>
        <table class="table md-5">
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
                <td><a class="btn btn-warning" href="editar_paciente.php?id_paciente=<?php echo $dado["id_paciente"]; ?>">Editar</a>|
                <a class="btn btn-danger" href="excluir_paciente.php?id_paciente=<?php echo $dado["id_paciente"]; ?>">Excluir</a>|</td>
            </tr>  
            <?php } ?>
        </table>
    </div>   
</body>
</html>