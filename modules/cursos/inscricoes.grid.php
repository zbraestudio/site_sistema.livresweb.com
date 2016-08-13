<?
$grid = new nbrAdminGrid('CursoInscricoes', 'Inscrições');
$grid->formFile = 'inscricoes.form.php';

$grid->AddColumnTable('Membro', 'Membro', 350, 'Membros', 'Nome');
$grid->AddColumnList('Situacao', 'Situação', 75, 'ATV=Ativo|SSP=Suspenso');

$grid->PrintHTML();
?>