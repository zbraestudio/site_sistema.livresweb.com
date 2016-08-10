<h1><?= $hub->GetParam('reportTitle') ?></h1>
<?
$form = new nbrAdminForms(null);
$form->isReport();

$form->AddFieldLkpList('MEMBRO', 'Membro', 'Membros', 'Nome', null, 3);

$form->PrintHTML();
?>