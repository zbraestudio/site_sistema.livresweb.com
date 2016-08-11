<?
$grid = new nbrAdminGrid('CursoModuloAulas', 'Aulas');
$grid->formFile = 'aulas.form.php';
$grid->AddControlOrder();

$grid->AddColumnString('Titulo', 'Título', 350);
$grid->AddColumnBoolean('Publicado', 'Publicado', 100);

$grid->PrintHTML();
?>