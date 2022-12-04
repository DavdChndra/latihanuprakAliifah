<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Perpus extends CI_Controller {
    public function __construct() {        
        parent::__construct();
        $this->load->model('User_m');
    }

    public function index()
    {
        $data['peminjam'] = $this->User_m->get_data('user')->result();
        return $this->load->view('v_home', $data);
    }
    public function create()
    {
        return $this->load->view('v_input');
    }
    public function store()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'kode_buku' => $this->input->post('kode_buku'),
            'nama_buku' => $this->input->post('nama_buku'),
        ];
        $this->User_m->insert_data($data, 'user');
        redirect('perpus');
    }
    public function edit($id){
        $id_data = array('id' => $id);
        $data['user'] = $this->User_m->edit_data($id_data, 'user')->result();
        $this->load->view('v_edit', $data);
    }
    public function update($id)
    {
        $data = [
            'id' => $id,
            'nama' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'kode_buku' => $this->input->post('kode_buku'),
            'nama_buku' => $this->input->post('nama_buku'),
        ];
        $this->User_m->update_data($data, 'user');
        redirect('perpus');
        
    }
    public function destroy($id)
    {
        $where = ['id' => $id];
        $this->User_m->delete_data($where, 'user');
        redirect('perpus');
    }

}

/* End of file Perpus.php */