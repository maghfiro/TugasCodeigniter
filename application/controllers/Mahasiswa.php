<?php
 class Mahasiswa extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }
     public function index()
     {
         $data['judul'] = 'daftar mahasiswa';
         $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
         if( $this->input->post('keyword') ) {
             $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
         }
         $this->load->view('templates/header', $data);
         $this->load->view('mahasiswa/index');
         $this->load->view('templates/footer');
     }

     public function tambah()
     {
         $data['judul'] = 'Tambah Data Mahasiswa';
         $this->form_validation->set_rules('nama', 'Nama', 'required');
         $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
         $this->form_validation->set_rules('sekolah', 'Sekolah', 'required');
         if( $this->form_validation->run() == FALSE ) {
             $this->load->view('templates/header', $data);
             $this->load->view('mahasiswa/tambah');
             $this->load->view('templates/footer');
         }else{
             $this->Mahasiswa_model->tambahDataMahasiswa();
             $this->session->set_flashdata('flash', 'Ditambahkan');
             redirect('mahasiswa');
         }
     }

     public function hapus($id)
     {
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa');
     }

     public function detail($id)
     {
         $data['judul'] = 'detai data  mahasiswa';
         $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
         $this->load->view('templates/header', $data);
         $this->load->view('mahasiswa/detail', $data);
         $this->load->view('templates/footer');
     }

     public function ubah($id)
     {
         $data['judul'] = 'Ubah Data Mahasiswa';
         $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
         $data['jurusan'] = ['TKR', 'TSM', 'TKJ', 'RPL', 'MULTIMEDIA', 'APH', 'PPT'];
         
         $this->form_validation->set_rules('nama', 'Nama', 'required');
         $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
         $this->form_validation->set_rules('sekolah', 'Sekolah', 'required');
         if( $this->form_validation->run() == FALSE ) {
             $this->load->view('templates/header', $data);
             $this->load->view('mahasiswa/ubah', $data);
             $this->load->view('templates/footer');
         }else{
             $this->Mahasiswa_model->ubahDataMahasiswa();
             $this->session->set_flashdata('flash', 'Diubah');
             redirect('mahasiswa');
         }
     }
 }