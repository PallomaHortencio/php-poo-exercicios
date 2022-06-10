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

$livroA = new Livro;


/* Atribuindo dados do objeto */
$livroA->setTitulo("O Símbolo Perdido");
$livroA->setAutor("Dan Brown");
$livroA->setPaginas(668);



$tecnico = new Tecnico;
$tecnico->setFormato(['digital', 'fisico']);

$programacao = new Programacao;
$programacao->setArea('Web', 'Design', 'Ux');

$didatico = new Didatico;
$didatico->setDisciplina('Português', 'Geografia', 'História');
$didatico->setNiveis(['Básico', 'Médio', 'Superior  ']);




?>

<h2>Livros Indicados:</h2>
<h3> <?=$livroA->getTitulo()?> </h3>
<h4> Autor: <?=$livroA->getAutor()?> </h4>
<p> Páginas: <?=$livroA->getPaginas()?> </p>
<p> Tecnico: <?=?></p>
<hr>


<pre><?=var_dump($tecnico, $didatico, $programacao)?></pre>

    
</body>
</html>