<?php


class Lingkaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Lingkaran');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['data_lingkaran'] = $this->Model_Lingkaran->getAll();
        $this->load->view('lingkaran/index', $data);
    }

    public function create()
    {
        $config = [
            [
                'field' => 'jari',
                'label' => 'Jari - jari',
                'rules' => 'required'
            ],
            [
                'field' => 'diameter',
                'label' => 'Diameter',
                'rules' => 'required'
            ]
        ];
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('lingkaran/create');
        } else {
            $this->Model_Lingkaran->save();
            $this->session->set_flashdata('dataLingkaran', 'ditambahkan');
            redirect(base_url('lingkaran'));
        }
    }

    public function export()
    {
        $data =[
            'title' => 'Excel Data Lingkaran',
            'datalingkaran' => $this->Model_Lingkaran->getAll()
        ];

        $this->load->view('lingkaran/lingkaran_export', $data);
    }

}