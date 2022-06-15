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

$livroA = new Didatico;


/* Atribuindo dados do objeto */
$livroA->setTitulo("O Símbolo Perdido");
$livroA->setAutor("Dan Brown");
$livroA->setPaginas(668);


$tecnico = new Tecnico;
$tecnico->setFormato(['Fisico']);
$tecnico->setTitulo("XYZ");

$programacao = new Programacao;
$programacao->setArea( 'Design');
$programacao->setTitulo('O Simbolo Perdido');
$didatico = new Didatico;
$didatico->setDisciplina('Português');
$didatico->setNiveis(['Avançado']);
$didatico->setTitulo("O pequeno principe");

$livroProgFrontEnd = new Programacao;
$livroProgFrontEnd->setTitulo("JavaScript"); // herda de Livro
$livroProgFrontEnd->setAutor("Maujor");// herda de Livro
$livroProgFrontEnd->setFormato(["digital"]);// herda de Tecnico
$livroProgFrontEnd->setArea("Front-End"); // dele mesmo




?>

<h2>Livros Indicados:</h2>
<h3> <?=$livroA->getTitulo()?> </h3>

<h4> Autor: <?=$livroA->getAutor()?> </h4>

<p> Páginas: <?=$livroA->getPaginas()?> </p>

<p> Tecnico: <?=$tecnico->getFormato()?></p>

<p> Programação: <?=$programacao->getArea()?></p>

<p>Didatico: <?=$didatico->getDisciplina()?>, <?= $didatico->getNiveis()?> </p>

<hr>


<!-- <pre><?=var_dump($tecnico, $didatico, $programacao, $livroProgFrontEnd)?></pre> -->


<ul>
    <li>Titulo: <?=$livroProgFrontEnd->getTitulo()?></li>
    <li>Autor: <?=$livroProgFrontEnd->getAutor()?></li>
    <li>Formato: <?=$livroProgFrontEnd->getFormato()?></li>
    <li>Area: <?=$livroProgFrontEnd->getArea()?></li>
    
</ul>

<hr>

<!-- Testes exercicio 3 -->
<h3>Resultados Exercício 3</h3>
<p>Técnico:
    <?=$tecnico->formataTitulo()?> </p>

<p>Programação:
    <?=$programacao->formataTitulo()?> </p>

<p>Didático: <?=$didatico->formataTitulo()?></p>


</body>
</html>