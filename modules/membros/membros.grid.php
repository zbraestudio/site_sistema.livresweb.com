<?
$grid = new nbrAdminGrid('Membros',' Membros');
$grid->formFile = 'membros.form.php';
$grid->orders = 'Nome ASC';

$grid->AddFilter("A.Situacao = 'MMB'", 'Membros', true);
$grid->AddFilter("A.Situacao = 'VIS'", 'Visitantes');
$grid->AddFilter("A.Situacao = 'FLT'", 'Faltosos');
$grid->AddFilter("A.Situacao = 'DES'", 'Desligados');

$grid->AddColumnString('Nome', 'Nome', 350);

$grid->AddColumnCustom('APASCENTADOR', 'Apascentador', 200);
$grid->AddColumnCustom('FOTOS', 'Fotos', 75, 'center');
$grid->AddColumnCustom('MINISTERIOS', 'Ministérios', 75, 'center');
$grid->AddColumnCustom('CONTATOS', 'Contatos', 75, 'center');

$grid->AddColumnList('Situacao', 'Situação', 100, 'MMB=Membro|VIS=Visitante|FLT=Faltoso|DES=Desligado');

$grid->PrintHTML();


function macroGridValues($field , $value, $record){
    global $db;

    if($field == 'MINISTERIOS'){

        $sql = 'SELECT COUNT(ID) TOTAL FROM MembroMinisterios  WHERE Membro = ' . $record->ID;
        $res = $db->LoadObjects($sql);
        $reg = $res[0];
        return intval($reg->TOTAL);

    }

    if($field == 'CONTATOS'){

        $sql = 'SELECT COUNT(ID) TOTAL FROM MembroContatos  WHERE Membro = ' . $record->ID;
        $res = $db->LoadObjects($sql);
        $reg = $res[0];
        return intval($reg->TOTAL);

    }
    if($field == 'FOTOS'){

        $sql = 'SELECT COUNT(ID) TOTAL FROM MembroFotos WHERE Membro = ' . $record->ID;
        $res = $db->LoadObjects($sql);
        $reg = $res[0];
        return intval($reg->TOTAL);

    }

    if($field == 'APASCENTADOR'){

        $sql  = 'SELECT Membros.* FROM GPIntegrantes';
        $sql .= ' JOIN GPs ON(GPs.ID = GPIntegrantes.GP)';
        $sql .= ' JOIN Membros ON(Membros.ID = GPs.Apascentador)';
        $sql .= ' WHERE GPIntegrantes.Integrante = ' . $record->ID;
        $res = $db->LoadObjects($sql);

        if(count($res)) {
            $reg = $res[0];
            return $reg->Nome;
        } else
            return ' ';
    }

}
?>