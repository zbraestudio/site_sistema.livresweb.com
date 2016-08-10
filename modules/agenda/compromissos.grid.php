<?
$grid = new nbrAdminGrid('Agenda', 'Agenda');
$grid->formFile = 'compromissos.form.php';
$grid->orders = 'Data DESC';

$grid->AddFilter('(A.Data >= NOW()) OR (A.Data < NOW() AND A.DataFim >= NOW())', 'Pra acontecer', true);
$grid->AddFilter('(A.Data < NOW() AND A.DataFim IS NULL) OR (A.Data < NOW() AND A.DataFIM < NOW())', 'Já aconteceram');

$grid->AddColumnString('Titulo', 'Título', 350);
$grid->AddColumnDate('Data', 'Data', 125);
$grid->AddColumnDate('DataFim', 'Dt. Fim', 125);
$grid->AddColumnBoolean('Publicado', 'Publicado', 75);

$grid->PrintHTML();
?>