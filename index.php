<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício POO - Livro</title>
</head>
<body>

<h1>Livro</h1>

<?php
/* Imporanto a classe */
require_once "src/Tecnico.php";
require_once "src/Programacao.php";
require_once "src/Didatico.php";

$tecnico = new Tecnico;
$tecnico->setFormato(['digital', 'fisico']);

$programacao = new Programacao;
$programacao->setArea('Web', 'Design', 'Ux');

$didatico = new Didatico;
$didatico->setDisciplina('Português', 'Geografia', 'História');
$didatico->setNiveis(['Básico', 'Médio', 'Superior  ']);




?>

<pre><?=var_dump($tecnico, $didatico, $programacao)?></pre>

    
</body>
</html>