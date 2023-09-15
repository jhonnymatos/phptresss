<?php

    include_once __DIR__ . "/../vendor/autoload.php";

    use App\model\Pessoa;
    use App\model\Funcionario;
    use App\model\Professor;
    use App\model\Aluno;

    $funcionario1 = new Funcionario("Esmeralda", 50,78945612300, 256, "Faxineira", "Limpeza");

    $professor1 = new Professor("Aguinaldo", 60, 153246555, "Historia");
    $professor2 = new Professor("Leandro", 36, 45845635564, "Logistica");
    $professor3 = new Professor("Francimar", 48, 45446444, "Etica");

    $aluno1 = new Aluno("Gabriel", 15, 15116654, 24789, "Leandro");
    $aluno2 = new Aluno("Joana", 17, 441448654, 24780, "Aguinaldo");
    $aluno3 = new Aluno("Alana", 19, 216544445, 24784, "Francimar");

    echo"Funcionario(a): {$funcionario->getNome()}, Idade: {$funcionario->getIdade()}, ID: {$funcionario->getIdFuncionario()}, Cargo: {$funcionario->getCargo()}, Departamento: {$funcionario->getDepartamento()}<br>";

    echo "Professor(a): {$professor1->getNome()}, Idade: {$professor1->getIdade()}, Disciplina: {$professor1->getDisciplinas()}<br>";
    echo "Professor(a): {$professor2->getNome()}, Idade: {$professor2->getIdade()}, Disciplina: {$professor2->getDisciplinas()}<br>";
    echo "Professor(a): {$professor3->getNome()}, Idade: {$professor3->getIdade()}, Disciplina: {$professor3->getDisciplinas()}<br>";
    
    echo "Aluno: {$aluno1->getNome()}, Idade: {$aluno1->getIdade()}, Matrícula: {$aluno1->getMatricula()}, Orientador: {$aluno1->getOrientadorAcademico()}<br>";
    echo "Aluno: {$aluno2->getNome()}, Idade: {$aluno1->getIdade()}, Matrícula: {$aluno1->getMatricula()}, Orientador: {$aluno2->getOrientadorAcademico()}<br>";
    echo "Aluno: {$aluno3->getNome()}, Idade: {$aluno1->getIdade()}, Matrícula: {$aluno1->getMatricula()}, Orientador: {$aluno3->getOrientadorAcademico()}<br>";

?>
