<?
$form = new nbrAdminForms('GPs');

$sql_where = 'A.ID IN(SELECT Membro FROM MembroMinisterios WHERE Ministerio = 11';
$sql_where .= ' AND Membro NOT IN(SELECT Apascentador FROM GPs)';
if(!$form->Editing()) {
  $sql_where .= ')';
} else {
  $sql_where .= ' OR (Membro = ' . $form->record->Apascentador . '))';
}
$form->AddFieldLkpList('Apascentador', 'Apascentador(a)', 'Membros', 'Nome', $sql_where, 3);
$form->AddDescriptionText('Somente é disponível adicionar um Membro do Ministério TALMIDIM, que ainda não é apascentador de um GP.');


$where_sql = "Membros.ID IN(SELECT ID FROM Membros WHERE Situacao = 'MMB')"; //que seja membro
$where_sql .= ' AND Membros.ID NOT IN(SELECT Membro FROM MembroMinisterios WHERE Ministerio = 11)'; //ñ pode ser apascentador
$where_sql .= ' AND Membros.ID NOT IN(SELECT Integrante FROM GPIntegrantes)'; //ñ pode estar em nenhum outro GP
if($form->Editing())
  $where_sql .= ' OR Membros.ID IN(SELECT Integrante FROM GPIntegrantes WHERE GP = ' . $form->record->ID . ')';

$form->AddLkpMultselect('INTEGRANTES', 'Integrantes', 'Selecione os integrantes desse GP', 'GPIntegrantes', 'GP', 'Membros', 'Integrante', 'Nome', $where_sql, null, 2, false);

//$form->AddCollections('Integrantes', 'integrantes.grid.php', 'GPIntegrantes', 'GP');

$form->PrintHTML();
?>