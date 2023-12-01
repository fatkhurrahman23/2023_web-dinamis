<?php
    require_once("./fpdf186/fpdf.php");

    function tampilkan_data($pdf){
        for ($indeks=1; $indeks < 300; $indeks++) { 
            if ($indeks % 35 == 1) {
                $pdf->AddPage();

                // judul
                $pdf->SetFillColor(0, 100, 200);
                $pdf->SetTextColor(0, 0, 0,);
                $pdf->SetFont('Arial', 'B');
                $pdf->Cell(30, 7, "Kolom 1", 1, 0, "L", true);
                $pdf->Cell(30, 7, "Kolom 2", 1, 0, "C", true);
                $pdf->Cell(40, 7, "Kolom 3", 1, 0, "R", true);
                $pdf->Ln();

                // atur warna sesuai judul
                $pdf->SetFillColor(255, 255, 255);
                $pdf->SetTextColor(0, 0, 0);
                $pdf->SetFont('Times');
            }
            // tampil data
            $acak = rand(100, 100000);
            $pdf->Cell(30, 7, "B{$indeks}, C1", 1, 0, "L", true);
            $pdf->Cell(30, 7, "B{$indeks}, C2", 1, 0, "L", true);
            $pdf->Cell(40, 7, $acak, 1, 0, "R", true);
            $pdf->Ln();
        }
    }
    // BUAT PDF 
    $pdf = new FPDF();
    tampilkan_data($pdf);
    $pdf->Output();
?>
