<?php
    include_once('classes/SalaAula.class.php');
    include_once('classes/Professor.class.php');
    include_once('classes/Aluno.class.php');

    $aluno1 = new Aluno;
    $aluno1->NomeAluno = "Matheus";
    $aluno1->Email = "matheus@gmail.com";
    
    $aluno2 = new Aluno;
    $aluno2->NomeAluno = "Manu";
    $aluno2->Email = "manu@gmail.com";
    
    $instrutor = new Professor;
    $instrutor->NomeProfessor = "Wesley Patrick";
    $instrutor->Idade         = 19;
    $instrutor->Telefone      = '989015846';
    $instrutor->Email         = 'wesleypatrick0909#gmail.com';

    $curso = new SalaAula;

    $curso-> NomeCurso = "Curso de php";
    $curso-> Horario = "12:40";
    $curso-> Valor = 100;
    $curso-> Professor = $instrutor;
    $curso-> Alunos = [$aluno1,$aluno2];

    echo "Curso: " . $curso->NomeCurso . "<br>";
    echo "Horário: " . $curso->Horario . "<br>";
    echo "Professor: " . $curso->Professor->NomeProfessor . "<br>";

    print_r($curso-> Alunos);

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Documento sem título</title>
    </head>

    <body>
    </body>
</html>