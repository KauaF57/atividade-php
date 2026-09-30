<?php
require_once 'model.php';
require_once 'controller.php';

$instrutor = new Instrutor();

$instrutor->id = 1;
$instrutor->nome = "Carlos";
$instrutor->email = "carlos@email.com";
$instrutor->tipo = "Instrutor";
$instrutor->definirSenha("123456");

$aluno = new Aluno();

$aluno->id = 2;
$aluno->nome = "João";
$aluno->email = "joao@email.com";
$aluno->tipo = "Aluno";
$aluno->definirSenha("abcdef");

$usuarios = [$instrutor, $aluno];

$controller = new UsuarioController();

$resultadoInstrutor = $controller->login(
    "carlos@email.com",
    "123456",
    $usuarios
);

$resultadoAluno = $controller->login(
    "joao@email.com",
    "abcdef",
    $usuarios
);

require_once 'login.php';
?>







