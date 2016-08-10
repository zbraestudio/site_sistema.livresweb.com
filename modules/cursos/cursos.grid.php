<?
$grid = new nbrAdminGrid('Cursos', 'Cursos');
$grid->formFile = 'cursos.form.php';
$grid->orders ='Nome';

$grid->AddColumnString('Nome', 'Nome', 350);
$grid->AddColumnImage('Capa', 'Capa');
$grid->AddColumnBoolean('Publicado', 'Publicado', 75);

$grid->PrintHTML();
?>