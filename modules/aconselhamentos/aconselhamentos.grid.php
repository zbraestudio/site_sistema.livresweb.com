<?
$grid = new nbrAdminGrid('Aconselhamentos', 'Aconselhamentos');
$grid->formFile = 'aconselhamentos.form.php';
$grid->orders = 'Data DESC';

$grid->AddColumnString('Titulo', 'Título', 300);
$grid->AddColumnCustom('PESSOAS', 'Pessoas', 250);
$grid->AddColumnDate('Data', 'Data', 125);

$grid->AddColumnHidden('Membro1');
$grid->AddColumnHidden('Membro2');

$grid->PrintHTML();


function macroGridValues($field , $value, $record){
    global $db;

    if($field == 'PESSOAS') {

        $pessoas = array();

        if (!empty($record->Membro1)) {
            $pessoa = LoadRecord('Membros', $record->Membro1);
            $pessoas[] =  $pessoa->Nome;
        }

        if(!empty($record->Membro2)) {
            $pessoa = LoadRecord('Membros', $record->Membro2);
            $pessoas[] =  $pessoa->Nome;
        }

        if(count($pessoas) > 0)
            return implode(', ', $pessoas);

        return 'Nenhuma especificada.';


    }


}

?>