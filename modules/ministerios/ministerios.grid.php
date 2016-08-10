<?
$grid = new nbrAdminGrid('Ministerios', 'Ministérios');
$grid->formFile = 'ministerios.form.php';
$grid->orders = 'Nome ASC';

$grid->AddColumnString('Nome', 'Nome', 350);

$grid->PrintHTML();
?>