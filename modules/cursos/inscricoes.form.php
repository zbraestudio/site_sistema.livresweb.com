<?
$form = new nbrAdminForms('CursoInscricoes');

$form->AddFieldLkpList('Membro', 'Membro','Membros','Nome', null, 2);
$form->AddFieldList('Situacao', 'Situação', 'ATV=Ativo|SSP=Suspenso', 1, 'ATV');

$form->PrintHTML();
?>