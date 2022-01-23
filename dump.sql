CREATE DATABASE gestor;
USE gestor;

CREATE TABLE `gestor`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(50) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`id_usuario`));

CREATE TABLE `gestor`.`paciente` (
  `id_paciente` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NOT NULL,
  `idade` INT(25),
  `telefone` VARCHAR(32) NOT NULL,
  `matricula` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`id_paciente`));
