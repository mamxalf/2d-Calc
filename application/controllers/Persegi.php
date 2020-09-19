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
            $this->session->set_flashdata('sisiPersegi', 'ditambahkan');
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
}
