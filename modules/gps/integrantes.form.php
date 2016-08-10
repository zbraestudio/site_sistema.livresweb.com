<?
$form = new nbrAdminForms('GPIntegrantes');


$where_sql = "A.ID IN(SELECT ID FROM Membros WHERE Situacao = 'MMB')";
$where_sql .= ' AND A.ID NOT IN(SELECT Membro FROM MembroMinisterios WHERE Ministerio = 11)'; //ñ pode ser apascentador
$where_sql .= ' AND A.ID NOT IN(SELECT Integrante FROM GPIntegrantes)'; //ñ pode estar em nenhum outro GP
$form->AddFieldLkpList('Integrante', 'Integrante', 'Membros', 'Nome', $where_sql, 3);
$form->AddDescriptionText('Um apascentador não pode ser integrante.');

$form->PrintHTML();
?>