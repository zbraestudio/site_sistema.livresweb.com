<?
$form = new nbrAdminForms('CursoModulos');
$form->AddFieldString('Nome', 'Nome', 100, 2);

$form->AddCollections('Aulas', 'aulas.grid.php', 'CursoModuloAulas', 'Modulo');
$form->AddCollections('Questões', 'questoes.grid.php', 'CursoModuloQuestoes', 'Modulo');

$form->PrintHTML();
?>