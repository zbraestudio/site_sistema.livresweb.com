<?
$form = new nbrAdminForms('MembroMinisterios');

$form->AddFieldLkpList('Ministerio', 'Ministério', 'Ministerios', 'Nome', null, 2);
$form->AddFieldLkpList('Funcao', 'Função', 'MinisteriosFuncoes', 'Nome', null, 2);

$form->PrintHTML();
?>