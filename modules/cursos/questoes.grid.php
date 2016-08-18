<?
$grid = new nbrAdminGrid('CursoModuloQuestoes', 'Questões');
$grid->formFile = 'questoes.form.php';
$grid->AddControlOrder();

$grid->AddColumnString('Questao', 'Questão', 350);

$grid->PrintHTML();
?>