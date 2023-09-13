<?php

    namespace App\model;

    class Funcionario extends Pessoa{
        private $IdFuncionario;
        private $Cargo;
        private $Departamento;
    

        function __construct($IdFuncionario, $Cargo, $Departamento){

            parent::__construct($nome, $idade, $CPF);

            $this->id = $IdFuncionario;
            $this->cargo = $Cargo;
            $this->departamento = $Departamento;
    
        }

        public function getIdFuncionario()
        {
            return $this->IdFuncionario;
        }

        public function getCargo()
        {
            return $this->Cargo;
        }

        public function getDepartamento()
        {
            return $this->Departamento;
        }

    }