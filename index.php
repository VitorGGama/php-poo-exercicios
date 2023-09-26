<?php
require_once "src/Livro.php";
$livro = new Livro;
$livro->setAutor("J.R.R. Tolkien");
$livro->setTitulo("O Hobbit");
$livro->setPaginas(300);

$outroLivro = new Livro;
// $outroLivro->setTitulo("HTML5");
// $outroLivro->setAutor("Maujor");

// Métodos com return $this/self permitem ENCADEAMENTO nas chamadas
$outroLivro->setTitulo("HTML5")->setAutor("Maujor");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 (corrigido)</title>
</head>
<body>
    <pre> <?=var_dump($outroLivro)?></pre>

    <h1>Exercício 01 (corrigido)</h1>
    <hr>
    <ul>
        <li>Autor: <?=$livro->getAutor()?></li>
        <li>Livro: <?=$livro->getTitulo()?></li>
        <li>Páginas: <?=$livro->getPaginas()?></li>
    </ul>
</body>
</html>