<?php

// echo "em pessoa;";

class pessoa{


    private string $nome;


    function __construct()
    {
        
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome( string $nome){
        $this->nome = $nome;
    }

}