<?
$form = new nbrAdminForms('Aconselhamentos');


if(!$form->Editing())
    $temPermissao = true;
else
    $temPermissao = ($security->GetUserID() == $form->record->Aconselhador);



if(!$temPermissao)
    $form->AddFieldCustom('AVISO', 'AVISO', 3);

$form->AddFieldString('Titulo', 'Título', 200, 2, null, true, !$temPermissao);
$form->AddFieldDate('Data', 'Data', 1, 'NOW', true, !$temPermissao);

$form->AddGroup('Pessoas');
$form->AddDescriptionText('Selecione abaixo se esse aconselhamento é para todas as pessoas de um Ministério ou especifique as pessoas.');
$form->AddFieldLkpList('Membro1', 'Membro 1', 'Membros', 'Nome', null, 3, false, !$temPermissao);
$form->AddFieldLkpList('Membro2', 'Membro 2', 'Membros', 'Nome', null, 3, false, !$temPermissao);

$form->AddGroup('Documentação');
$form->AddFieldText('Documentacao', 'Documentação', 3, 150, null, true, !$temPermissao);

if(!$form->Editing()){
    $form->AddFieldHidden('Aconselhador', $security->GetUserID());
}

$form->PrintHTML();



function macroFromFields($fieldName, $record, $legend, $length, $columns, $valueDefault, $required, $readOnly, $height, $options, $required_str, $fileType, $fileTypeDescritio){
    global $cms, $moduleObj;

    switch ($fieldName){

        case 'AVISO':

            $html  = ' <div id="msg_erro"><b>Atenção!</b> Você não é o aconselhador desse registro. Sendo assim, somente poderá visualizar as informações.';
            $html .= ' <img src="http://sistema.ielbc.com.br/cms/admin/images/msg_erro_close.png" width="12" heigth="12" id="msg_erro_close" class="alphaOut">';
            $html .= '</div>';

            return $html;

    }

}

?>