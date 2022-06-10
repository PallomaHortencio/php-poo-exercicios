<?php
require_once "Tecnico.php";
class Didatico extends Tecnico {
    private string $disciplina;
    private array $niveis;


    public function getDisciplina(): string
    {
        return $this->disciplina;
    }

   
    public function setDisciplina(string $disciplina)
    {
        $this->disciplina = $disciplina;
    }

   
    public function getNiveis(): string
    {
        return implode(", ", $this->niveis);
    }

 
    public function setNiveis(array $niveis)
    {
        $this->niveis = $niveis;
    }
}

?>