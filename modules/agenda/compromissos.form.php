<?
$form = new nbrAdminForms('Agenda');

$form->AddFieldString('Titulo', 'Título', 100, 3);

$form->AddGroup('Vigência');
$form->AddFieldDate('Data', 'Data', 1);
$form->AddSpace();
$form->AddFieldDate('DataFim', 'Dt. Fim', 1, null, false);
$form->AddFieldString('DataTexto', 'Texto', 100, 3, null, false);

$form->AddGroup('Informações do Evento');
$form->AddFieldHtml('Texto', 'Texto', 3, 100);

if(!$form->Editing()){
    $form->AddFieldHidden('Publicado', 'Y');
}

$form->PrintHTML();
?>