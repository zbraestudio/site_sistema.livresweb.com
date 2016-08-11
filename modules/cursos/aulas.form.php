<?
$form = new nbrAdminForms('CursoModuloAulas');

$form->AddFieldString('Titulo', 'Título', 100, 3);
$form->AddFieldHtml('Aula', 'Aula', 3, 300);

if(!$form->Editing()){
  $form->AddFieldHidden('Publicado', 'Y');
}

$form->PrintHTML();
?>