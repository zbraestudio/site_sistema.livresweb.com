<?
$form = new nbrAdminForms('Cursos');

$form->AddFieldString('Nome', 'Nome', 100, 3);

$form->AddGroup('Imagem da Capa do Curso');
$form->AddDescriptionText('Dimensão da capa: 000x000px');
$form->AddFieldImage('Capa', 'Capa');

if(!$form->Editing()){
  $form->AddFieldHidden('Publicado', 'Y');
}

$form->PrintHTML();
?>