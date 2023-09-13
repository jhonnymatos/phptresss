<?php

namespace App\model; 

    class Pessoa{

        private $Nome;
        private $Idade;
        private $CPF;

    function __construct($Nome, $Idade, $CPF){
        $this->nome = $Nome;
        $this->idade = $Idade;
        $this->CPF = $CPF;

    }
    
    public function getNome()
        {
            return $this->Nome;
        }

        public function getIdade()
        {
            return $this->Idade;
        }

        public function getCPF()
        {
            return $this->CPF;
        }

}