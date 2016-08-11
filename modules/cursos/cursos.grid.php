<?
$grid = new nbrAdminGrid('Cursos', 'Cursos');
$grid->formFile = 'cursos.form.php';
$grid->macroFile = 'cursos.macro.php';
$grid->orders ='Nome';

$grid->AddColumnString('Nome', 'Nome', 350);
$grid->AddColumnImage('Capa', 'Capa');
$grid->AddColumnTable('Professor', 'Professor', 200, 'Membros', 'Nome');
$grid->AddColumnBoolean('Publicado', 'Publicado', 75);

$grid->PrintHTML();
?>