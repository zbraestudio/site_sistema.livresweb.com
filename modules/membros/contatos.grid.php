<?
$grid =  new nbrAdminGrid('MembroContatos', 'Membros');
$grid->formFile = 'contatos.form.php';

$grid->AddColumnString('Contato', 'Contato', 350);
$grid->AddColumnList('Tipo', 'Tipo', 150, 'EML=E-mail|TRS=Telefone Residencial|TRC=Telefone Comercial|TCL=Celular|TCW=Celular com WhatsApp');

$grid->PrintHTML();
?>