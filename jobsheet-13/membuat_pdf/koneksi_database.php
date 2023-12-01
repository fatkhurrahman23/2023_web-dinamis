<?php
    require_once("./fpdf186/fpdf.php");

    $username = "root";
    $password = "";

    $id_mysql = mysqli_connect("localhost", $username, $password);
    if (!$id_mysql) 
        die("Gagal melakukan koneksi ke Server Database MySQL.");
    
    $db_selected = mysqli_select_db($id_mysql, "sewa_buku");
    if (!$db_selected) 
        die("Database tidak dapat dipilih");

    $hasil = mysqli_query($id_mysql, "SELECT * FROM data_peminjam ORDER BY nama_peminjam");

    if(!$hasil)
        die("Permintaan gagal dilaksanakan");
    
    // buat pdf
    $pdf = new FPDF();
    $pdf->AddPage();

    // judul
    $pdf->SetFillColor(95, 158, 160);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->SetFont('Arial', 'B');
    $pdf->Cell(20, 7, "Kode", 1, 0, "L", true);
    $pdf->Cell(50, 7, "Nama Peminjam", 1, 0, "L", true);
    $pdf->Cell(30, 7, "Jenis Kelamin", 1, 0, "L", true);
    $pdf->Cell(30, 7, "Tanggal Lahir", 1, 0, "L", true);
    $pdf->Cell(50, 7, "Alamat", 1, 0, "L", true);
    $pdf->Cell(30, 7, "Pekerjaan", 1, 0, "L", true);
    $pdf->Ln();

    // atur warna untuk selain judul
    $pdf->SetFillColor(255, 255, 255);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFont('Times');
    
    $pencacah = 0;
    while ($baris = mysqli_fetch_array($hasil)) {
        $pdf->Cell(20, 7, $baris['1'], 1, 0, "L", true);
        $pdf->Cell(50, 7, $baris['2'], 1, 0, "L", true);
        $pdf->Cell(30, 7, $baris['3'], 1, 0, "L", true);
        $pdf->Cell(30, 7, $baris['4'], 1, 0, "L", true);
        $pdf->Cell(50, 7, $baris['5'], 1, 0, "L", true);
        $pdf->Cell(30, 7, $baris['6'], 1, 0, "L", true);
        $pdf->Ln();
        $pencacah++;
    }
    mysqli_close($id_mysql);
    $pdf->Output();
?>