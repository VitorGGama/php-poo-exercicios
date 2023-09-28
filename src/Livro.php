<?php
abstract class Livro {
    private string $titulo;
    private string $autor;
    private int $paginas = 0;

    public function setTitulo(string $titulo):void {
        $this->titulo = $titulo;
    }

    public function getTitulo():string {
        return $this->titulo;
    }

    public function getAutor():string {
        return $this->autor;
    }
    public function setAutor(string $autor):void {
        $this->autor = $autor;
    }

    public function getPaginas():int {
        return $this->paginas;
    }
    public function setPaginas(string $paginas):void {
        $this->paginas = $paginas;
    }

   
}