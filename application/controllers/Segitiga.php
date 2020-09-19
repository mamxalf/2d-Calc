<?php


class Segitiga extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Segitiga');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['data_segitiga'] = $this->Model_Segitiga->getAll();
        $this->load->view('segitiga/index', $data);
    }

    public function create()
    {
        $config = [
            [
                'field' => 'alas',
                'label' => 'Alas Segitiga',
                'rules' => 'required'
            ],
            [
                'field' => 'tinggi',
                'label' => 'Tinggi Segitiga',
                'rules' => 'required'
            ],
            [
            'field' => 'garis_miring',
            'label' => 'Garis Miring Segitiga',
            'rules' => 'required'
        ]
        ];
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('segitiga/create');
        } else {
            $this->Model_Segitiga->save();
            $this->session->set_flashdata('segitigaData', 'ditambahkan');
            redirect(base_url('segitiga'));
        }
    }

    public function export()
    {
        $data =[
            'title' => 'Excel Data Segitiga',
            'datasegitiga' => $this->Model_Segitiga->getAll()
        ];

        $this->load->view('segitiga/segitiga_export', $data);
    }

}