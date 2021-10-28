<?php
    include "../koneksi.php";
    $laporan = "SELECT nama_kegiatan, pelaksanaan, keterangan, FROM alur-pendaftaran";
    $hasil = mysqli_query($koneksi,$laporan);
    $data = array();
    while($row = mysqli_fetch_assoc($hasil)){
        array_push($data, $row);
    }
    $judul = "Alur Pendaftaran SDN Mojotengah 2";
    $tgl= "Update : ".date("l, d F Y");
    $header= array(
        array("label"=>"Nama Kegiatan", "length"=>40, "align"=>"L"),
        array("label"=>"Waktu Pelaksanaan", "length"=>50, "align"=>"L"),
        array("label"=>"Keterangan", "length"=>60, "align"=>"L"),
    );
    require ("../fpdf16/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage('P','A4','C');
    $pdf->SetFont('times','B','12');
    $pdf->Cell(0, 15, $judul, '0', 1, 'C');
    $pdf->SetFont('times','i','9');
    $pdf->Cell(0, 10, $tgl, '0', 1, 'P');
    $pdf->SetFont('times','','11');
    $pdf->SetFillColor(100,149,237);
    $pdf->SetTextColor(255);
    $pdf->setDrawColor(0,0,0);
    
    foreach ($header as $kolom){
        $pdf->Cell($kolom['length'], 8, $kolom['label'], 1, '0', $kolom['align'], true);
    }
    $pdf->Ln();
    $pdf->SetFillColor(220,220,220);
    $pdf->SettextColor(0);
    $pdf->SetFont('times','','10');
    $fill =false;
    foreach ($data as $baris){
        $i= 0;
        foreach ($baris as $cell){
            $pdf->Cell ($header[$i]['length'], 7, $cell, 2, '0', $kolom['align'], $fill);
            $i++;
        }
        $fill = !$fill;
        $pdf->Ln();
    }
    $pdf->Output();
?>