<?php

class pesanan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    public function index ($nama,$npm) {
        $data['m_data']= $this->m_data->data_p();
        $this->load->view('v_keranjang', $data);
    }
    public function tambah()
    {
        $data = array(
            'id_pesanan'      => $this->input->post('kode'),
            'nama_p'    => $this->input->post('nama'),
            'harga_p'   => $this->input->post('harga')
        );
        $this->m_data->input_data($data, 'transaksi');
        redirect('pesanan/handi/17081010012');
    }
    function hapus($id)
    {
        $where = array('id_pesanan' => $id);
        $this->m_data->hapus_data($where, 'transaksi');
        redirect('pesanan/handi/1708101012');
    }
    
    function reset()
    {
        $this->m_data->reset('transaksi');
        redirect('pesanan/handi/17081010012');
    }

    function bayar()
    {
        $data = array(
            'id_pesanan'=> $this->input->post('id'),
            'namapembeli'    => $this->input->post('nama'),
            'total_harga'   => $this->input->post('harga')
        );
        $this->m_data->input_data($data, 'pesanan');
        $this->m_data->reset('transaksi');
        header('location:'.base_url().'user/handi/1708101012');
    }
}
