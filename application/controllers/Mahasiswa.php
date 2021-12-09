<?php

class Mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_mahasiswa');
    }

    public function index()
    {
        $data['mahasiswa'] = $this->m_mahasiswa->tampil_data()->result();

        $this->load->view('templates/header');
        $this->load->view('mahasiswa', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jurusan = $this->input->post('jurusan');

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'tgl_lahir' => $tgl_lahir,
            'jurusan' => $jurusan,
        );

        $this->m_mahasiswa->input_data('tb_mahasiswa', $data);
        redirect('mahasiswa/index');
    }
}
