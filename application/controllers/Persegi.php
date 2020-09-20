<?php


class Persegi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Persegi');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['data_persegi'] = $this->Model_Persegi->getAll();
        $this->load->view('persegi/index', $data);
    }

    public function create()
    {
        $config = [
            [
                'field' => 'sisi',
                'label' => 'Sisi Persegi',
                'rules' => 'required'
            ]
        ];
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('persegi/create');
        } else {
            $this->Model_Persegi->save();
            $this->session->set_flashdata('tambahPersegi', 'ditambahkan');
            redirect(base_url('persegi'));
        }
    }

    public function export()
    {
        $data =[
            'title' => 'Excel Data Persegi',
            'datapersegi' => $this->Model_Persegi->getAll()
        ];

        $this->load->view('persegi/persegi_export', $data);
    }

    public function delete($id)
    {
        $this->Model_Persegi->destroy($id);
        $this->session->set_flashdata('hapusPersegi', 'dihapus');
        redirect(base_url('persegi'));
    }

    public function update($id)
    {
        $data['data_persegi'] = $this->Model_Persegi->getDataById($id);
        $config = [
            [
                'field' => 'sisi',
                'label' => 'Sisi Persegi',
                'rules' => 'required'
            ]
        ];
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('persegi/update', $data);
        } else {
            $this->Model_Persegi->put($id);
            $this->session->set_flashdata('editPersegi', 'diupdate');
            redirect(base_url('persegi'));
        }
    }
}
