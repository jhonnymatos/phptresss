<?php

    namespace App\model;

    class Professor extends Funcionario{
        private $Disciplinas;


        function __construct($Disciplinas){

            parent::__construct($nome, $idade, $CPF);

            $this->disciplinas = $Disciplinas;
    
        }

        public function getDisciplinas()
        {
            return $this->Disciplinas;
        }

    }