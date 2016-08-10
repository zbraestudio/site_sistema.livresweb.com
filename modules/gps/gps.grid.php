<?
$grid = new nbrAdminGrid('GPs', 'Gps');
$grid->formFile = 'gps.form.php';

$grid->AddColumnTable('Apascentador', 'Apascentador(a)', 250, 'Membros', 'Nome');
$grid->AddColumnCustom('INTEGRANTES', 'Integrantes', 350);

$grid->PrintHTML();



function macroGridValues($field , $value, $record){
  global $db;

  if($field == 'INTEGRANTES'){

    $sql  = 'SELECT Membros.* FROM GPIntegrantes';
    $sql .= ' JOIN Membros ON(Membros.ID = GPIntegrantes.Integrante)';
    $sql .= ' WHERE GPIntegrantes.GP = ' . $record->ID;
    $integrantes = $db->LoadObjects($sql);

    $total = count($integrantes);

    $return = $total . ' integrante(s)';

    if($total > 0) {

      $return .= ' - ';

      foreach ($integrantes as $x => $integrante) {
        if ($x > 0)
          $return .= ', ';

        $return .= $integrante->Nome;
      }

    }

    return $return;
  }

}


?>