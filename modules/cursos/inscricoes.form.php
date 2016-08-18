<?
$form = new nbrAdminForms('CursoInscricoes');

$form->AddFieldLkpList('Membro', 'Membro','Membros','Nome', null, 2);
$form->AddFieldList('Situacao', 'Situação', 'ATV=Ativo|SSP=Suspenso', 1, 'ATV');

$titulo = 'Módulos';
$descricao = 'Libere abaixo quais módulos já estão disponível para o aluno inscrito.';
$form->AddLkpMultselect('MODULOS', $titulo, $descricao, 'CursoInscricaoModulos','Inscricao', 'CursoModulos', 'Modulo', 'Nome', 'CursoModulos.Curso =  ' . $form->record->Curso, null, 2, true, false, 'Ordem', 10, true);


$form->PrintHTML();
?>