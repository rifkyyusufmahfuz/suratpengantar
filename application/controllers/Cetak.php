<?php
Class Cetak extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }	

    function index($no_pengajuan)
    {
        $data = $this->pengantar_model->get_cetak($no_pengajuan);

        if($data != 'NO_DATA_QUERY'){
            $nik = $data[0]['nik'];
            $tanggal_pengajuan = $data[0]['tanggal_pengajuan'];
            $jns_pengajuan = $data[0]['jns_pengajuan'];
            $nama_penduduk = $data[0]['nama_penduduk'];
            $jns_kelamin = $data[0]['jns_kelamin'];
            $tempat_lhr = $data[0]['tempat_lhr'];
            $tgl_lhr = $data[0]['tgl_lhr'];
            $agama = $data[0]['agama'];
            $sts_perkawinan = $data[0]['sts_perkawinan'];
            $pekerjaan = $data[0]['pekerjaan'];
            $alamat = $data[0]['alamat'];
            $rt = $data[0]['rt'];
            $rw = $data[0]['rw'];
            $this->load->library('pdf');
        $pdf = new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',12);
        $pdf->SetMargins(30,30,20);
        //Kop Surat
        $pdf->Cell(25);
        $pdf->Image('assets/img/bekasi.png',30,7);
        $pdf->Ln(0);
        $pdf->Cell(0,0,'PEMERINTAH KOTA BEKASI ',0,0,'C');
        $pdf->Ln(5);
        $pdf->Cell(0,0,'KECAMATAN JATISAMPURNA ',0,0,'C');
        $pdf->Ln(5);
        $pdf->Cell(0,0,'KELURAHAN BOJONG MENTENG',0,0,'C');
        $pdf->Ln(5);
        $pdf->Cell(72,0,'RT ',0,0,'R');
        $pdf->Cell(7, 0,' 012', 0, 0, 'R');
        $pdf->Cell(10,0,'RW ',0,0,'R');
        $pdf->Cell(7, 0,' 003', 0, 0, 'R');
        $pdf->Ln();
        $pdf->setlinewidth(0.6);
        $pdf->Cell(0, 9, " ", "B");
        $pdf->setlinewidth(0.3);
        $pdf->Ln(0.7);
        $pdf->Cell(0, 9, " ", "B");
        $pdf->Ln(4);

        // konten lampiran
        $pdf->SetFont('Arial','',10);
        $pdf->Ln();
        $pdf->Cell(35, 4, 'No Pengantar', 0, 0, 'L'); 
        $pdf->Cell(85, 4,': '.$no_pengajuan, 0, 0, 'L');
        $pdf->Ln(5);
        $pdf->Cell(35, 4, 'Lampiran', 0, 0, 'L'); 
        $pdf->Cell(85, 4,':   -', 0, 0, 'L');
        $pdf->Ln(5);
        $pdf->Cell(35, 4, 'Hal', 0, 0, 'L');
        $pdf->Cell(35, 4,': Surat Pengantar', 0, 0, 'L');
        $pdf->Ln(9);


        //konten isi:
        $pdf->Ln(6);
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(35, 4, 'Yang bertandatangan di bawah ini menerangkan bahwa :', 0, 0, 'L');
        $pdf->Ln(9);
        $pdf->Cell(35, 4, 'NIK KTP', 0, 0, 'L');
        $pdf->Cell(85, 4,'  : '.$nik, 0, 0, 'L');
        $pdf->Ln(5); 
        $pdf->Cell(35, 4, 'Nama Lengkap', 0, 0, 'L');
        $pdf->Cell(85, 4,'  : '.$nama_penduduk, 0, 0, 'L');
        $pdf->Ln(5);
        $pdf->Cell(31.5, 4, 'Tempat/Tanggal Lahir', 0, 0, 'L');
        $pdf->Cell(21, 4,' : '.$tempat_lhr, 0, 0, 'R');
        $pdf->Cell(22, 4,'  / '.$tgl_lhr, 0, 0, 'R');
        $pdf->Ln(5);
        $pdf->Cell(35, 4, 'Status Perkawinan', 0, 0, 'L');
        $pdf->Cell(85, 4,'  : '.$sts_perkawinan, 0, 0, 'L');
        $pdf->Ln(5);
        $pdf->Cell(35, 4, 'Agama', 0, 0, 'L');
        $pdf->Cell(85, 4,'  : '.$agama, 0, 0, 'L');
        $pdf->Ln(5);
        $pdf->Cell(35, 4, 'Alamat', 0, 0, 'L');
        $pdf->Cell(85, 4,'  : '.$alamat, 0, 0, 'L');
        $pdf->Ln(5);
        $pdf->Cell(35, 4, 'Pekerjaan', 0, 0, 'L');
        $pdf->Cell(85, 4,'  : '.$pekerjaan, 0, 0, 'L');
        $pdf->Ln(5);
        $pdf->Cell(35, 4, 'Keperluan', 0, 0, 'L');
        $pdf->Cell(85, 4,'  : '.$jns_pengajuan, 0, 0, 'L');
        $pdf->Ln(5);

        $pdf->Cell(35, 15, 'Demikian Surat Pengantar ini dibuat untuk dapat dipergunakan sesuai dengan keperluannya.', 0, 0, 'L');
        $pdf->Ln(20);
        $pdf->Cell(35, 10, 'Mengetahui,', 0, 0, 'L');
        $pdf->Cell(121, 10, 'Kota Bekasi, '.format_indo2(date('Y-m-d')), 0, 0, 'R');
        $pdf->Ln(6);
        $pdf->Cell(18, 10, 'Ketua RW', 0, 0, 'C');
        $pdf->Cell(8, 10,': '.$rw, 0, 0, 'C');
        $pdf->Cell(33, 10, 'Kelurahan Krapyak', 0, 0, 'R');
        $pdf->Cell(70, 10, 'Ketua RT', 0, 0, 'R');
        $pdf->Cell(9, 10, ': '.$rt, 0, 0, 'R');
        $pdf->Cell(9, 10, '/ RW', 0, 0, 'R');
        $pdf->Cell(7, 10,' '.$rw, 0, 0, 'R');
        $pdf->Ln(25);
        $pdf->Image('assets/img/barcode.jpg',42,150);
        $pdf->Image('assets/img/barcode.jpg',150,150);
        
        $pdf->Output();
        
        }
    }


}

