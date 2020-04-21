<?php


class Crud extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    function index()
    {
        $data['m_data'] = $this->m_data->tampil_data()->result_array();
        $this->load->view('v_admin', $data);
    }

    function tambah($nama,$npm)
    {
        $this->load->view('v_input');
    }

    function add($nama,$npm)
    {
        $id = $this->input->post('id_menu');
        $nama = $this->input->post('nama_menu');
        $harga = $this->input->post('harga');

        $data = array(
            'id_menu' => $id,
            'nama_menu' => $nama,
            'harga' => $harga
        );
        $this->m_data->input_data($data, 'menu');
        redirect(base_url('crud/handi/17081010012'));
    }

    function adduser($nama,$npm)
    {
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');

        $data = array(
            'nama' => $nama,
            'password' => $password
        );
        $this->m_data->input_data($data, 'user');
        redirect(base_url('user/daftaruser/handi/17081010012'));
    }

    function hapus($nama,$npm,$id)
    {
        $where = array('id_menu' => $id);
        $this->m_data->hapus_data($where, 'menu');
        redirect(base_url('crud/handi/17081010012'));
    }
    function hapususer($name,$npm,$nama)
    {
        $where = array('nama' => $nama);
        $this->m_data->hapus_data($where, 'user');
        redirect(base_url('user/daftaruser/handi/17081010012'));
    }

    function user()
    {
        $this->load->view('v_inputuser');
    }

    function edit($nama,$npm,$id)
    {
        $where = array('id_menu' => $id);
        $data['m_data'] = $this->m_data->edit_data($where, 'menu')->result();
        $this->load->view('v_edit', $data);
    }
    function edituser($name,$npm,$nama)
    {
        $where = array('nama' => $nama);
        $user['m_data'] = $this->m_data->edit_data($where, 'user')->result();
        $this->load->view('v_edituser', $user);
    }
    function update()
    {
        $id = $this->input->post('id_menu');
        $nama = $this->input->post('nama_menu');
        $alamat = $this->input->post('harga');

        $data = array(
            'nama_menu' => $nama,
            'harga' => $alamat,
        );

        $where = array(
            'id_menu' => $id
        );

        $this->m_data->update_data($where, $data, 'menu');
        redirect(base_url('crud/handi/17081010012'));
    }
    function updateuser()
    {
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');

        $data = array(
            'nama' => $nama,
            'password' => $password,
        );

        $where = array(
            'nama' => $nama
        );

        $this->m_data->update_data($where, $data, 'user');
        redirect(base_url('user/daftaruser/handi/17081010012'));
    }
}
