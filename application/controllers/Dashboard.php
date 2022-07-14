<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    function index()
    {
        $this->load->view('pengguna/head');
        $this->load->view('pengguna/navbar');
        $this->load->view('pengguna/sidebar');
        $this->load->view('pengguna/carisurat');
        $this->load->view('pengguna/home_user');
        $this->load->view('pengguna/footer');
    }

    function login()
    {
        $this->load->view('pengguna/head');
        $this->load->view('login');
        $this->load->view('pengguna/footer');
    }

    function get_penduduk()
    {
        $nik = $this->input->post('nik');
        $data = $this->pengantar_model->carinama($nik);
        echo json_encode($data);
    }


    function pengajuan()
    {
        $data['tampil'] = $this->pengantar_model->lihat_data();
        $data = array("nm_otomatis" => $this->pengantar_model->fungsinomor());
        
        $this->load->view('pengguna/head');
        $this->load->view('pengguna/navbar');
        $this->load->view('pengguna/sidebar');
        $this->load->view('pengguna/carisurat');
        $this->load->view('pengguna/pengajuan', $data);
        $this->load->view('pengguna/carinama', $data);
        $this->load->view('pengguna/footer');
    }

    public function simpan_pengajuan()
    {
        $this->pengantar_model->simpan();
        echo '<script>
            window.location.href="' . base_url('dashboard/pengajuan') . '";
            alert("Pengajuan Surat Pengantar Berhasil"); 
            </script>';
    }

    function autentikasi() //untuk validasi login
    {
        $id_admin = $this->input->post('id_admin');
        $kata_sandi = $this->input->post('kata_sandi');

        $validasi_id_admin = $this->pengantar_model->validasi_id($id_admin);
        if ($validasi_id_admin->num_rows() > 0) {
            $validate_ps = $this->pengantar_model->validasi_katasandi($id_admin, $kata_sandi);
            if ($validate_ps->num_rows() > 0) {
                $x = $validate_ps->row_array();
                if ($x['status_admin'] == '1') {
                    $this->session->set_userdata('masuk', TRUE);
                    $this->session->set_userdata('user', $id_admin);
                    $id = $x['id_admin'];
                    if ($x['hak_akses'] == '2') { //RW
                        $name = $x['nama_admin'];
                        $this->session->set_userdata('access', '2');
                        $this->session->set_userdata('id', $id);
                        $this->session->set_userdata('name', $name);
                        redirect('akses_admin/index');
                    } else if ($x['hak_akses'] == '3') { //RT
                        $name = $x['nama_admin'];
                        $this->session->set_userdata('access', '3');
                        $this->session->set_userdata('id', $id);
                        $this->session->set_userdata('name', $name);
                        redirect('akses_admin/index');
                    }
                } else {
                    echo '<script>
                    window.location.href="' . base_url('dashboard/login') . '";
                    alert("ID Admin Atau Password Salah. Silahkan Coba Lagi...!"); 
                    </script>';
                }
            } else {
                echo '<script>
                window.location.href="' . base_url('dashboard/login') . '";
                alert("ID Admin Atau Password Salah. Silahkan Coba Lagi...!"); 
                </script>';
            }
        } else {
            echo '<script>
            window.location.href="' . base_url('dashboard/login') . '";
            alert("ID Admin Atau Password Salah. Silahkan Coba Lagi...!"); 
            </script>';
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        $url = base_url('dashboard/login');
        redirect($url);
    }

    function cari()
    {
        $nik = $this->input->get('nik');
        $data['content'] = 'tampil_pengantar';
        $data['data'] = $this->pengantar_model->caripengantar($nik);
        $this->load->view('pengguna/head', $data);
        $this->load->view('pengguna/navbar', $data);
        $this->load->view('pengguna/sidebar', $data);
        $this->load->view('pengguna/carisurat');
        $this->load->view('pengguna/tampil_pengantar', $data);
        $this->load->view('pengguna/footer', $data);
    }

    function caricetak(){
		$no_pengajuan=$this->input->get('no_pengajuan');
		$data['cetak']=$this->pengantar_model->cari_cetak($no_pengajuan);
        $this->load->view('pengguna/head', $data);
        $this->load->view('pengguna/navbar', $data);
        $this->load->view('pengguna/sidebar', $data);
        $this->load->view('pengguna/carisurat');
        $this->load->view('pengguna/tampil_cetak', $data);
        $this->load->view('pengguna/footer', $data);
	}
}
