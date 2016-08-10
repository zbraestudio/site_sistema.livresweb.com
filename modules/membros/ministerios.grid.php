<?
$grid = new nbrAdminGrid('MembroMinisterios', 'Ministérios');
$grid->formFile = 'ministerios.form.php';

$grid->AddColumnTable('Ministerio', 'Ministério', 200, 'Ministerios', 'Nome');
$grid->AddColumnTable('Funcao', 'Função', 200, 'MinisteriosFuncoes', 'Nome');

$grid->PrintHTML();
?>