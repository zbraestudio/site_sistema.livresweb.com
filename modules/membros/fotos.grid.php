<?
$grid = new nbrAdminGrid('MembroFotos', 'Fotos');
$grid->formFile = 'fotos.form.php';

$grid->AddColumnString('Legenda', 'Legenda', 350);
$grid->AddColumnImage('Foto', 'Foto');

$grid->PrintHTML();
?>