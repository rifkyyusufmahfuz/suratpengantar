<?php
class Akses_admin extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->library('session');
    //validasi jika user belum login
    if ($this->session->userdata('masuk') != TRUE) {
      $url = base_url('dashboard/login');
      redirect($url);
    }
  }

  function index()
  {
    if ($this->session->userdata('access') == '3') {
      $data['total1'] = $this->pengantar_model->hitungpengajuan_rt();
      $data['total2'] = $this->pengantar_model->sudahdivalidasi_rt();
    } else {
      $data['total1'] = $this->pengantar_model->hitungpengajuan_rw();
      $data['total2'] = $this->pengantar_model->sudahdivalidasi_rw();
    }
    $this->load->view('admin/head2');
    $this->load->view('admin/navbar2');
    $this->load->view('admin/sidebar2');
    $this->load->view('admin/home_admin', $data);
    $this->load->view('admin/footer2');
  }

  function tampilvalidasi()
  {
    // function ini hanya boleh diakses oleh admin dan dosen
    if ($this->session->userdata('access') == '3') {
      $data['pengajuan_surat'] = $this->pengantar_model->datavalidasi_rt();
    } else {
      $data['pengajuan_surat'] = $this->pengantar_model->datavalidasi_rw();
    }
    $data['detail'] = $this->pengantar_model->datapenduduk();
    $this->load->view('admin/head2');
    $this->load->view('admin/navbar2');
    $this->load->view('admin/sidebar2');
    $this->load->view('admin/tampil_pengantar2', $data);
    $this->load->view('admin/modal', $data);
    $this->load->view('admin/footer2');
  }

  function validasi()
  {
    if ($this->session->userdata('access') == '3') {
      $this->pengantar_model->inputvalidasi_rt();
    } else {
      $this->pengantar_model->inputvalidasi_rw();
    }
  }

  function riwayatvalidasi()
  {
    // function ini hanya boleh diakses oleh admin dan dosen
    if ($this->session->userdata('access') == '3') {
      $data['pengajuan_surat'] = $this->pengantar_model->histori_rt();
    } else {
      $data['pengajuan_surat'] = $this->pengantar_model->histori_rw();
    }
    $data['detail'] = $this->pengantar_model->datapenduduk();
    $this->load->view('admin/head2');
    $this->load->view('admin/navbar2');
    $this->load->view('admin/sidebar2');
    $this->load->view('admin/riwayat_validasi', $data);
    $this->load->view('admin/modal', $data);
    $this->load->view('admin/footer2');
  }
}
