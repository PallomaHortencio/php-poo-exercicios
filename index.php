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
require_once "src/Livro.php";

/* Criação de objetos */
$livroA = new Livro;
$livroB = new Livro;
$livroC = new Livro;

/* Atribuindo dados do objeto */
$livroA->setTitulo("O Símbolo Perdido");
$livroA->setAutor("Dan Brown");
$livroA->setPaginas(668);

$livroB->setTitulo("O Pequeno Principe");
$livroB->setAutor("Antoine de Sanit-Exupéry");
$livroB->setPaginas(132);

$livroC->setTitulo("A Divina Comédia");
$livroC->setAutor("Dante Alighieri");
/* $livroC->setPaginas(600); */

?>


<h2>Livros Indicados:</h2>
<h3> <?=$livroA->getTitulo()?> </h3>
<h4> Autor: <?=$livroA->getAutor()?> </h4>
<p> Páginas: <?=$livroA->getPaginas()?> </p>
<hr>

<h3> <?=$livroB->getTitulo()?> </h3>
<h4> Autor: <?=$livroB->getAutor()?> </h4>
<p> Páginas: <?=$livroB->getPaginas()?> </p>
<hr>

<h3> <?=$livroC->getTitulo()?> </h3>
<h4> Autor: <?=$livroC->getAutor()?> </h4>
<p> Páginas: <?=$livroC->getPaginas()?> </p>
    
</body>
</html>