<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Cadastro de Pacientes</h3>
                    <?php
                        if(isset($_SESSION["status_cadastro"])):
                    ?>
                    <div class="notification is-success">
                      <p>Cadastro efetuado!</p>
                      <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>
                    <?php
                        if(isset($_SESSION["paciente_existe"])):
                    ?>
                    <div class="notification is-info">
                        <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['paciente_existe']);
                    ?>
                    <div class="has-text-grey">
                       <a href="pacientes.php">Voltar</a>
                    </div>
                    <div class="box">
                        <form action="cadastrar_pacientes.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="idade" class="input is-large" type="number" placeholder="idade" required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="telefone" class="input is-large" type="tel" placeholder="Telefone" required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="matricula" class="input is-large" type="text" placeholder="Matricula" required>
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>