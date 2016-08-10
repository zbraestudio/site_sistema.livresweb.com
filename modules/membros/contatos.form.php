<?
$form = new nbrAdminForms('MembroContatos');

$form->AddFieldList('Tipo', 'Tipo', 'EML=E-mail|TRS=Telefone Residencial|TRC=Telefone Comercial|TCL=Celular|TCW=Celular com WhatsApp', 2);
$form->AddFieldString('Contato', 'Contato', 100, 2);

$form->PrintHTML();
?>