<?php
    require_once("./fpdf186/fpdf.php");

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(100, 12, "AANG");

    $pdf->Image("./images/aang.jpg", 10, 30);
    
    $pdf->SetFont('Times', '', 12);

    $teks = "Aang adalah karakter utama dalam serial animasi \"Avatar: The Last Airbender\" yang diciptakan oleh Michael Dante DiMartino dan Bryan Konietzko. ".
            "Aang adalah seorang Avatar, yang merupakan individu yang dapat mengendalikan keempat elemen: air, tanah, api, dan udara. ". 
            "Dia adalah penerus siklus Avatar dan memiliki tanggung jawab untuk menjaga keseimbangan di dunia.";

    $pdf->setXY(125, 30);
    $pdf->MultiCell(0, 10, $teks, 0, "L");

    $pdf->Output();
?>