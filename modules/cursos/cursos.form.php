<?
$form = new nbrAdminForms('Cursos');

$form->AddFieldString('Nome', 'Nome', 100, 3);
$form->AddFieldLkpList('Professor', 'Professor', 'Membros', 'Nome', null, 2);

$form->AddGroup('Imagem da Capa do Curso');
$form->AddDescriptionText('Dimensão da capa: 1170x675px');
$form->AddFieldImage('Capa', 'Capa');

if(!$form->Editing()){
  $form->AddFieldHidden('Publicado', 'Y');
}

$form->AddCollections('Módulos', 'modulos.grid.php', 'CursoModulos', 'Curso');
$form->AddCollections('Alunos', 'alunos.grid.php', 'CursoAlunos', 'Curso');

$form->PrintHTML();
?>