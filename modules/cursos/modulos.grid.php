<?
$grid = new nbrAdminGrid('CursoModulos', 'Módulos');
$grid->formFile = 'modulos.form.php';
$grid->AddControlOrder();

$grid->AddColumnString('Nome', 'Nome', 350);

$grid->PrintHTML();
?>