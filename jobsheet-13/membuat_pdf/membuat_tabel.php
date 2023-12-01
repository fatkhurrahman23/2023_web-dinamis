<?php
    require_once("./fpdf186/fpdf.php");

    $daftar_ibukota = array(
        array("Jakarta", "Indonesia"),
        array("London", "Inggris"),
        array("Tokyo", "Jepang"),
        array("Beijing", "China"),
        array("Moscow", "Rusia"),
        array("Berlin", "Jerman"),
        array("Paris", "Perancis"),
        array("Madrid", "Spanyol"),
        array("Roma", "Italia"),
    );
    
    // buat PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    // judul
    $pdf->SetFillColor(0, 200, 200);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->SetFont('Arial', 'B');
    $pdf->Cell(30, 7, "Daftar Ibukota", 1, 0, "L", true);
    $pdf->Cell(30, 7, "Negara", 1, 0, "L", true);
    $pdf->Ln();

    // Atur warna untuk selain judul
    $pdf->SetFillColor(255, 255, 255);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFont('Times', '');

    // tampil data
    for ($i = 0; $i < count($daftar_ibukota); $i++) {
        $pdf->Cell(30, 7, $daftar_ibukota[$i][0], 1, 0, "L", true);
        $pdf->Cell(30, 7, $daftar_ibukota[$i][1], 1, 0, "L", true);
        $pdf->Ln();
    }

    $pdf->Output();
?>