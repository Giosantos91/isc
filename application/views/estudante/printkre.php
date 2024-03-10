<?php
$pdf = new FPDF('p', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('times', 'b', 12);
$pdf->SetAuthor(utf8_decode('Elígio dos Santos'));
$pdf->SetTitle(utf8_decode('CARTÃO RESULTADO DO ESTUDO'));
$pdf->SetAutoPageBreak(true);
$pdf->Image('assets/img/instituisaun/logo.png', 30, 9, 22);
$pdf->Cell(190, 5, utf8_decode('FUNDAÇÃO CRISTAL'), 0, 1, 'C');
$pdf->Cell(190, 5, utf8_decode('INSTITUTO SUPERIOR CRISTAL'), 0, 1, 'C');
$pdf->SetFont('times', 'i', 12);
$pdf->Cell(190, 5, utf8_decode('"ACREDITADO"'), 0, 1, 'C');
$pdf->Cell(190, 5, utf8_decode('Estrada de Balide Dili  Timor-Leste'), 0, 1, 'C');
$pdf->Cell(190, 5, utf8_decode('HP. 77234682/77384778/77245915/77374845'), 0, 1, 'C');
$pdf->cell(190, 0.4, '', '1', 'C', true);
$pdf->SetFont('times', 'B', 12);
$pdf->Cell(190, 4, '', 0, 1);
$pdf->Cell(190, 4, utf8_decode('CARTÃO RESULTADO DO ESTUDO'), 0, 1, 'C');
$pdf->Ln();
$pdf->SetFont('times', 'b', 10);
$pdf->SetX(40);
$pdf->Cell(40, 4, 'Nome', 0);
$pdf->SetX(120);
$pdf->Cell(40, 4, 'Departamentu', 0);
$pdf->SetX(63);
$pdf->Cell(40, 4, ':', 0);
$pdf->SetX(145);
$pdf->Cell(40, 4, ':', 0);
$pdf->SetX(65);
$pdf->Cell(20, 4, utf8_decode($estudante['naran_estudante']), 0, 0);
$pdf->SetX(150);
$pdf->Cell(20, 4, utf8_decode($estudante['departamentu']), 0, 1);

//
$pdf->SetX(40);
$pdf->Cell(40, 4, 'NRE', 0);
$pdf->SetX(63);
$pdf->Cell(40, 4, ':', 0);
$pdf->SetX(65);
$pdf->Cell(20, 4, utf8_decode($estudante['nre']), 0, 0);
$pdf->SetX(120);
$pdf->Cell(40, 4, 'Semester', 0);
$pdf->SetX(145);
$pdf->Cell(40, 4, ':', 0);
$pdf->SetX(150);
$pdf->Cell(20, 4, utf8_decode($estudante['id_semester']), 0, 1);
//
$pdf->SetX(40);
$pdf->Cell(40, 4, 'Sexo', 0);
$pdf->SetX(63);
$pdf->Cell(40, 4, ':', 0);
$pdf->SetX(65);
$pdf->Cell(65, 4, utf8_decode($estudante['sexo']), 0, 0);
$pdf->SetX(120);
$pdf->Cell(40, 4, utf8_decode('Ano Académico'), 0);
$pdf->SetX(145);
$pdf->Cell(40, 4, ':', 0);
$pdf->SetX(150);
$pdf->Cell(65, 4, date('Y'), 0, 1);



$pdf->SetX(40);
$pdf->Cell(40, 4, 'Faculdade', 0);
$pdf->SetX(63);
$pdf->Cell(40, 4, ':', 0);
$pdf->SetX(65);
$pdf->Cell(20, 4, utf8_decode($estudante['fakuldade']), 0, 0);
$pdf->SetX(120);
$pdf->Cell(40, 4, 'Nivel de Estudo', 0);
$pdf->SetX(145);
$pdf->Cell(40, 4, ':', 0);
$pdf->SetX(150);
$pdf->Cell(20, 4, utf8_decode($estudante['nivel_estudu']), 0, 1);


$pdf->Ln(8);
$pdf->SetFont('times', 'b', 10);
$pdf->SetX(20);
$pdf->Cell(9, 6, utf8_decode('Nú'), 1, 0, 'C');
$pdf->Cell(25, 6, utf8_decode('Código'), 1, 0);
$pdf->Cell(65, 6, utf8_decode('Disciplinas'), 1, 0);
$pdf->Cell(20, 6, utf8_decode('Crédito'), 1, 0, 'C');
$pdf->Cell(20,6,('Valor'),1,0,'C');
$pdf->Cell(20,6,('Predicado'),1,0,'C');
$pdf->Cell(20,6,('Total'),1,1,'C');

$pdf->SetFont('times', '', 10);
?>
<?php
$no = 1;
$sks = 0;
$grand_total = 0;
$total_predikado=0;
$rata=0;

foreach ($viewkrelaaktivu as $std) {
    $sks = $sks + $std->sks;  
  
    $pdf->SetX(20);
    $pdf->Cell(9, 6, utf8_decode($no), 1, 0, 'C');
    $pdf->Cell(25, 6, $std->kode_disiplina, 1, 0);
    $pdf->Cell(65, 6, utf8_decode($std->disiplina), 1, 0);
    $pdf->Cell(20, 6, $std->sks, 1, 0, 'C');
    $pdf->Cell(20, 6, $std->valor, 1, 0, 'C');



    if ($std->valor == 'A') {
        $pdf->Cell(20, 6,( $predikadu = 4),1,0,'C');
    } elseif ($std->valor == 'B') {
        $pdf->Cell(20, 6,( $predikadu = 3), 1, 0, 'C');
    } elseif ($std->valor == 'C') {
        $pdf->Cell(20, 6, ($predikadu = 2),1,0,'C');
    } elseif ($std->valor == 'D') {
        $pdf->Cell(20, 6, ($predikadu = 1),1,0,'C');
    } elseif ($std->valor == 'E') {
        $pdf->Cell(20, 6, ($predikadu = 0),1,0,'C');
    } else {
        $pdf->Cell(20, 6, ($predikadu = 0),1,0,'C');
    }
    $total_predikadu = $predikadu * $std->sks;
    $grand_total = $grand_total + $total_predikadu;
    $rata=($grand_total!=0)?($grand_total/$sks) * 100:0;



$pdf->cell(20,6, ($total_predikadu),1,1,'C');
    
    $no++;
  
}
$pdf->Ln(0);
$pdf->SetFont('times', 'b', 10);
$pdf->SetX(20);
$pdf->Cell(99, 6, utf8_decode('Grand Total'), 1, 0);
$pdf->Cell(80, 6, utf8_decode($grand_total), 1, 1, 'C');
$pdf->Ln(0);
$pdf->SetFont('times', 'b', 10);
$pdf->SetX(20);
$pdf->Cell(99, 6, utf8_decode('Total Crédito'), 1, 0);
$pdf->Cell(80, 6, utf8_decode($sks), 1, 1,'C');

$pdf->Ln(0);
$pdf->SetFont('times', 'b', 10);
$pdf->SetX(20);
$pdf->Cell(99, 6, utf8_decode('IPC'), 1, 0);
$pdf->Cell(80, 6, number_format($grand_total / $sks, 2), 1, 1, 'C');


$pdf->SetX(40);
$fulan = array(
    '01' => 'Janeiro',
    '02' => 'Fevereiro',
    '03' => 'Marso',
    '04' => 'Abril',
    '05' => 'Maio',
    '06' => 'Junho',
    '07' => 'Julho',
    '08' => 'Agosto',
    '09' => 'Setembro',
    '10' => 'Outubro',
    '11' => 'Novembro',
    '12' => 'Dezembro'
);

#footer
$pdf->Ln(15);

$pdf->SetFont('times', '', 10);
$pdf->SetX(141);
$pdf->MultiCell(60, 4, 'Dili, ' . date('d') . ' de ' . $fulan[date('m')] . ' de ' . date('Y'), 0);
$pdf->Ln(20);
$pdf->SetFont('times', 'B', 10);
$pdf->SetX(35);
$pdf->Cell(40, 4, 'Docente Orientador', 0);
$pdf->SetX(30);
$pdf->Cell(40, 20, '(...........................................)', 0);
$pdf->SetX(153);
$pdf->Cell(38, 2, 'Estudante', 0);
$pdf->SetX(31);
$pdf->Cell(50, 9, '', 0);
$pdf->SetX(140);
$pdf->Cell(40, 20, '(...........................................)', 0, 1);
$pdf->Cell(175, 5, 'Chefe Departamentu de', 0, 0, 'C');
$pdf->SetX(115);
$pdf->Cell(70, 5, utf8_decode($estudante['departamentu']), 0, 1);
$pdf->SetX(76);
$pdf->Cell(40, 20, '(....................................................................)', 0, 1);

// $pdf->MultiCell(95, 1, '', 0, 'C');
// $pdf->SetX(120);

$pdf->Output(utf8_decode($estudante['naran_estudante']. ".pdf"), 'I'); ?>
<script class="type/javascript">
    window.print();
</script>
