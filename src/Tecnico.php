<?php
require_once "Livro.php";
class Tecnico extends Livro {
    private array $formato;


    public function getFormato(): string
    {
        return implode(", ", $this->formato);
    }

 
    public function setFormato(array $formato)
    {
        $this->formato = $formato;
    }
}
 
?>