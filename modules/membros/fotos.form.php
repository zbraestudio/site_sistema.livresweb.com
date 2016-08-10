<?
$form = new nbrAdminForms('MembroFotos');

$form->AddFieldString('Legenda', 'Legenda', 150, 3);
$form->AddFieldImage('Foto', 'Foto');

$form->PrintHTML();
?>