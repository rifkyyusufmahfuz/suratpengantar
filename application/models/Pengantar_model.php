<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengantar_model extends CI_Model
{
    function lihat_data()
    {
        return $this->db->get('pengajuan_surat');
    }

    function validasi_id($id_admin)
    {
        $result = $this->db->query("SELECT * FROM admin_sistem WHERE id_admin='$id_admin' LIMIT 1");
        return $result;
    }

    function validasi_katasandi($id_admin, $kata_sandi)
    {
        $result = $this->db->query("SELECT * FROM admin_sistem WHERE id_admin='$id_admin' AND kata_sandi='$kata_sandi' LIMIT 1");
        return $result;
    }

    function carinama($nik)
    {
        $hsl = $this->db->query("SELECT * FROM penduduk WHERE nik='$nik'");
        if ($hsl->num_rows() > 0) {
            foreach ($hsl->result() as $data) {
                $hasil = array(
                    'nik' => $data->nik,
                    'nama_penduduk' => $data->nama_penduduk,
                );
            }
        }
        return $hasil;
    }

    function caripengantar($nik)
    {
        $this->db->like('nik', $nik, 'both');
        $this->db->order_by('nik', 'DESC');
        return $this->db->get('pengajuan_surat')->result();
    }

    public function fungsinomor()
    {

        $this->db->SELECT('RIGHT(pengajuan_surat.no_pengajuan,4) as nomor_oto', FALSE);
        $this->db->order_by('no_pengajuan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pengajuan_surat');

        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->nomor_oto) + 1;
        } else {
            $kode = 1;
        }
        $tahun = date("Y");
        $kode_max_ = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $nmr_otomatis = "SP-" . $tahun . '-' . $kode_max_;
        return $nmr_otomatis;
    }

    public function simpan()
    {
        $tanggal = date("Y-m-d H:i:s");
        $data = array(
            "no_pengajuan" => $this->input->post('no_pengajuan'),
            "nik" => $this->input->post('nik'),
            "jns_pengajuan" => $this->input->post('jns_pengajuan'),
            "tanggal_pengajuan" => $tanggal,
            "sts_pengajuan" => 1,
            "validasi_rt" => 1,
            "validasi_rw" => 1
        );
        $this->db->insert('pengajuan_surat', $data);
    }


    function datapenduduk()
    {

        return $this->db->get('penduduk')->result();
        $this->db->where('RT =' . $id_admin);
    }

    //Validasi RT

    public function datavalidasi_rt($validasi_rt = '1') //Mengambil data surat pengantar yang belum divalidasi RT
    {

        $this->db->select('pengajuan_surat.*, penduduk.nik AS nik, penduduk.nama_penduduk');
        $this->db->join('penduduk', 'pengajuan_surat.nik = penduduk.nik');
        $this->db->where('validasi_rt', $validasi_rt);
        $query = $this->db->get('pengajuan_surat');
        return $query->result();
    }

    public function histori_rt($validasi_rt = '2') //Mengambil data surat pengantar yang belum divalidasi RT
    {

        $this->db->select('pengajuan_surat.*, penduduk.nik AS nik, penduduk.nama_penduduk');
        $this->db->join('penduduk', 'pengajuan_surat.nik = penduduk.nik');
        $this->db->where('validasi_rt', $validasi_rt);
        $query = $this->db->get('pengajuan_surat');
        return $query->result();
    }

    function inputvalidasi_rt()
    {
        if ($this->input->post() == FALSE) {
            echo '<script>
            window.location.href="' . base_url('akses_admin/tampilvalidasi') . '";
            alert("Gagal Divalidasi. Silahkan Cek Kembali...!"); 
            </script>';
        } else {
            $no_pengajuan = $this->input->post('no_pengajuan');
            $validasi_rt = 2;


            $proses = array(
                'no_pengajuan' =>  $no_pengajuan,
                'validasi_rt' => $validasi_rt,
            );
            $this->db->where('no_pengajuan', $no_pengajuan);
            $this->db->update('pengajuan_surat', $proses);

            echo '<script>
            window.location.href="' . base_url('akses_admin/tampilvalidasi') . '";
            alert("Surat Pengantar Berhasil Divalidasi...!"); 
            </script>';
        }
    }

    function hitungpengajuan_rt($validasi_rt = '1')
    {
        $query = $this->db->query("SELECT * FROM pengajuan_surat WHERE validasi_rt=$validasi_rt");
        $total = $query->num_rows();
        return $total;
    }

    //Untuk menampilkan jumlah data surat pengantar yang sudah divalidasi RT di home
    function sudahdivalidasi_rt($validasi_rt = '2')
    {
        $query = $this->db->query("SELECT * FROM pengajuan_surat WHERE validasi_rt=$validasi_rt");
        $total2 = $query->num_rows();
        return $total2;
    }

    // Validasi RW
    function hitungpengajuan_rw($validasi_rw = '1')
    {
        $query = $this->db->query("SELECT * FROM pengajuan_surat WHERE validasi_rw=$validasi_rw AND validasi_rt=2");
        $total3 = $query->num_rows();
        return $total3;
    }

    //Untuk menampilkan jumlah data surat pengantar yang sudah divalidasi RT di home
    function sudahdivalidasi_rw($validasi_rw = '2')
    {
        $query = $this->db->query("SELECT * FROM pengajuan_surat WHERE validasi_rw=$validasi_rw");
        $total4 = $query->num_rows();
        return $total4;
    }

    //Mengambil data surat pengantar yang belum divalidasi RW
    public function datavalidasi_rw($validasi_rw = '1')
    {

        $this->db->select('pengajuan_surat.*, penduduk.nik AS nik, penduduk.nama_penduduk');
        $this->db->join('penduduk', 'pengajuan_surat.nik = penduduk.nik');
        $this->db->where('validasi_rw', $validasi_rw);
        $this->db->where('validasi_rt', 2);
        $query = $this->db->get('pengajuan_surat');
        return $query->result();
    }

    //Mengambil data surat pengantar yang belum divalidasi RW
    public function histori_rw($validasi_rw = '2')
    {

        $this->db->select('pengajuan_surat.*, penduduk.nik AS nik, penduduk.nama_penduduk');
        $this->db->join('penduduk', 'pengajuan_surat.nik = penduduk.nik');
        $this->db->where('validasi_rw', $validasi_rw);
        $query = $this->db->get('pengajuan_surat');
        return $query->result();
    }

    function inputvalidasi_rw()
    {
        if ($this->input->post() == FALSE) {
            echo '<script>
            window.location.href="' . base_url('akses_admin/tampilvalidasi') . '";
            alert("Gagal Divalidasi. Silahkan Cek Kembali...!"); 
            </script>';
        } else {
            $no_pengajuan = $this->input->post('no_pengajuan');
            $validasi_rw = 2;


            $proses = array(
                'no_pengajuan' =>  $no_pengajuan,
                'validasi_rw' => $validasi_rw,

            );
            $this->db->where('no_pengajuan', $no_pengajuan);
            $this->db->update('pengajuan_surat', $proses);

            echo '<script>
            window.location.href="' . base_url('akses_admin/tampilvalidasi') . '";
            alert("Surat Pengantar Berhasil Divalidasi...!"); 
            </script>';
        }
    }

    //Mengambil data dari table untuk di cetak
    public function get_cetak($no_pengajuan)
    {
        $this->db->select('pengajuan_surat.*, penduduk.nik AS nik, penduduk.nama_penduduk, penduduk.jns_kelamin, penduduk.tempat_lhr, penduduk.tgl_lhr, penduduk.agama, penduduk.sts_perkawinan, penduduk.pekerjaan, penduduk.alamat, penduduk.rt, penduduk.rw');
        $this->db->join('penduduk', 'pengajuan_surat.nik = penduduk.nik');
        $this->db->where('no_pengajuan', $no_pengajuan);
        $sql = $this->db->get('pengajuan_surat');
        return ($sql->num_rows() < 1) ? 'NO_DATA_QUERY' : $sql->result_array();
    }

    public function cari_cetak($no_pengajuan)
    {
        $this->db->select('pengajuan_surat.*, penduduk.nik AS nik, penduduk.nama_penduduk');
        $this->db->join('penduduk', 'pengajuan_surat.nik = penduduk.nik');
        $this->db->where('no_pengajuan', $no_pengajuan);
        $this->db->where('validasi_rw', 2);
        $this->db->limit(10);
        $data = $this->db->get('pengajuan_surat');
        return $data->result();
    }
}
