<?
$grid = new nbrAdminGrid('GPIntegrantes', 'Integrantes');
$grid->formFile = 'integrantes.form.php';

$grid->AddColumnTable('Integrante', 'Integrante', 350, 'Membros', 'Nome');

$grid->PrintHTML();

?>