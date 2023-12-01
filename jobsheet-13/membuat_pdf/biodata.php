<?php
    require_once("./fpdf186/fpdf.php");

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 12);
    $biodata = "Halo, nama saya M FATKHUR RAHMAN, ".
                "Saya ada seorang mahasiswa prodi Teknologi Rekayasa Komputer Polines ".
                "Saya sangat tertarik dengan bidang pemrograman, ".
                "Saya juga sangat tertarik dengan bidang jaringan komputer, ";
    $pdf->setX(80);
    $pdf->MultiCell(0, 5, $biodata, 1, "R");

    $pdf->Output();
?>