<?
$grid = new nbrAdminGrid('CursoAlunos', 'Alunos');
$grid->formFile = 'alunos.form.php';

$grid->AddColumnTable('Aluno', 'Aluno', 350, 'Membros', 'Nome');
$grid->AddColumnList('Situacao', 'Situação', 75, 'ATV=Ativo|SSP=Suspenso');

$grid->PrintHTML();
?>