<?php
    require_once("./fpdf186/fpdf.php");

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Courier', '', 14);
    $pdf->SetTextColor(255, 255, 255);
    $judul = "Biodataku";
    $pdf->MultiCell(185, 12, $judul, 1, "C", true);

    $pdf->SetFont('Times', '', 12);
    $pdf->SetTextColor(220, 20, 60);
    $biodata = "Halo, nama saya M FATKHUR RAHMAN, ".
                "Saya ada seorang mahasiswa prodi Teknologi Rekayasa Komputer Polines ".
                "Saya sangat tertarik dengan bidang pemrograman, ".
                "Saya juga sangat tertarik dengan bidang jaringan komputer, ";
    $pdf->setXY(20, 30);
    $pdf->MultiCell(170, 5, $biodata, 1, "C");

    $pdf->SetFont('Times', '', 12);
    $pdf->SetTextColor(27, 128, 1);
    $biodata = "Halo, nama saya M FATKHUR RAHMAN, ".
                "Saya ada seorang mahasiswa prodi Teknologi Rekayasa Komputer Polines ".
                "Saya sangat tertarik dengan bidang pemrograman, ".
                "Saya juga sangat tertarik dengan bidang jaringan komputer, ";
    $pdf->setXY(30, 50);
    $pdf->MultiCell(120, 5, $biodata, 1, "C");
    $pdf->Output();
?>