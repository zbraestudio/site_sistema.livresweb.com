<?
$grid = new nbrAdminGrid('MinisteriosFuncoes', 'Funções');
$grid->formFile = 'funcoes.form.php';
$grid->orders = 'Nome ASC';

$grid->AddColumnString('Nome', 'Nome', 350);

$grid->PrintHTML();
?>