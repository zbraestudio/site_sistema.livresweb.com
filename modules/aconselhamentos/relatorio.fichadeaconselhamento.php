<?
$filters = $hub->GetParam('reportFilters');
$filters = json_decode($filters);

//registros..
$tb_membro = LoadRecord('Membros', $filters->MEMBRO);
$tb_aconselhamentos = $db->LoadObjects('SELECT * FROM Aconselhamentos WHERE (Membro1 = ' . $tb_membro->ID . ' OR Membro2 = ' . $tb_membro->ID . ') ORDER BY Data DESC');

//campos tratados

// Situação
switch($tb_membro->Situacao){
    case 'MMB': $tb_membro_situacao = 'Membro';         break;
    case 'VIS': $tb_membro_situacao = 'Visitante';      break;
    case 'FLT': $tb_membro_situacao = 'Faltoso';        break;
    case 'DES': $tb_membro_situacao = 'Desligado';      break;
    default:    $tb_membro_situacao = 'Não informado';  break;
}

$pdf = new nbrPDF('Histórico de Aconselhamento');

$pdf->PreparePDF();


/** DADOS */

$pdf->NewLine(10);

$pdf->SetFont('Arial','B',10);
$pdf->Cell($pdf->getWithPixel(10),10, utf8_decode('Nome:'), 0, 0, 'R');
$pdf->SetFont('');
$pdf->Cell($pdf->getWithPixel(60),10, utf8_decode($tb_membro->Nome));

$pdf->SetFont('Arial','B',10);
$pdf->Cell($pdf->getWithPixel(10),10, utf8_decode('Situação:'), 0, 0, 'R');
$pdf->SetFont('');
$pdf->Cell($pdf->getWithPixel(20),10, utf8_decode( $tb_membro_situacao ));

$pdf->NewLine(10);

$pdf->SetFont('Arial','B',10);
$pdf->Cell($pdf->getWithPixel(10),10, utf8_decode('Apelido:'), 0, 0, 'R');
$pdf->SetFont('');
$pdf->Cell($pdf->getWithPixel(60),10, utf8_decode($tb_membro->Apelido));

$pdf->SetFont('Arial','B',10);
$pdf->Cell($pdf->getWithPixel(10),10, utf8_decode('Situação Civil:') , 0, 0, 'R');
$pdf->SetFont('');
$pdf->Cell($pdf->getWithPixel(20),10, utf8_decode('Casado(a)'));


/** REGISTROS DE ACONSELHAMENTO */

$pdf->NewLine(20);

$pdf->RenderText('Aconselhamentos', $pdf->getWithPixel(100), 'center', 'Arial,12,B,#000000');
$pdf->NewLine();


foreach($tb_aconselhamentos as $tb_aconselhamento){


    // Pessoa
    $pessoas = array();
    if (!empty($tb_aconselhamento->Membro1)) {
        $pessoa = LoadRecord('Membros', $tb_aconselhamento->Membro1);
        $pessoas[] =  $pessoa->Nome;
    }

    if(!empty($tb_aconselhamento->Membro2)) {
        $pessoa = LoadRecord('Membros', $tb_aconselhamento->Membro2);
        $pessoas[] =  $pessoa->Nome;
    }

    if(count($pessoas) > 0)
        $pessoas_str =  implode(', ', $pessoas);
    else
        $pessoas_str =  'Nenhuma especificada.';


    // Data
    $data = new nbrDate($tb_aconselhamento->Data, ENUM_DATE_FORMAT::YYYY_MM_DD);

    $pdf->NewLine(10);
    $top = $pdf->GetY() - 1;
    $pdf->Line($pdf->lMargin, $top, ($pdf->w - $pdf->rMargin), $top);

    $pdf->NewLine(20);

    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell($pdf->getWithPixel(10), 10, utf8_decode('Data:'), 0, 0, 'L');
    $pdf->SetFont('');
    $pdf->Cell($pdf->getWithPixel(40), 10, utf8_decode($data->GetDayOfWeekLong() . ', ' . $data->GetFullDateForLong()));

    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell($pdf->getWithPixel(15), 10, utf8_decode('Título:'), 0, 0, 'L');
    $pdf->SetFont('');
    $pdf->Cell($pdf->getWithPixel(35), 10, utf8_decode($tb_aconselhamento->Titulo));

    $pdf->NewLine(10);

    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell($pdf->getWithPixel(10), 10, utf8_decode('Pessoa(s):'), 0, 0, 'L');
    $pdf->SetFont('');
    $pdf->Cell($pdf->getWithPixel(40), 10, utf8_decode($pessoas_str));

    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell($pdf->getWithPixel(15), 10, utf8_decode('Aconselhador:'), 0, 0, 'L');
    $pdf->SetFont('');
    $pdf->Cell($pdf->getWithPixel(35), 10, utf8_decode('Tiago Gonçalves'));

    $pdf->NewLine(15);

    $pdf->SetFont('');
    //$pdf->Texto($tb_aconselhamento->Documentacao, $pdf->getWithPixel(100), 'left', 'Arial, 10,, #000000');
    $pdf->MultiCell($pdf->getWithPixel(100),15, utf8_decode($tb_aconselhamento->Documentacao),0,'J');



}

$pdf->Output();
?>