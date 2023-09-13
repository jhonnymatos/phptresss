<?php

    namespace App\model;

    class Aluno extends Pessoa{
    private $Matricula;
    private $OrientadorAcademico;

    function __construct($Matricula, $OrientadorAcademico){

        parent::__construct($nome, $idade, $CPF);

        $this->matricula = $Matricula;
        $this->orientadorAcademico = $OrientadorAcademico;

        }

        public function getMatricula()
        {
            return $this->Matricula;
        }

        public function getOrientadorAcademico()
        {
            return $this->OrientadorAcademico;
        }

    }