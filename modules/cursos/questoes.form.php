<?
$form = new nbrAdminForms('CursoModuloQuestoes');

$form->AddFieldText('Questao', 'Questão', 3, 200);

if(!$form->Editing()){
  $form->AddFieldHidden('Ordem', '9999');
}

$form->PrintHTML();

?>