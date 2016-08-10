<?
$form = new nbrAdminForms('CursoAlunos');

$form->AddFieldLkpList('Aluno', 'Aluno','Membros','Nome', null, 2);
$form->AddFieldList('Situacao', 'Situação', 'ATV=Ativo|SSP=Suspenso', 1, 'ATV');

$form->PrintHTML();
?>