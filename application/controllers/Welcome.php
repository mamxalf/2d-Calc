<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Persegi');
        $this->load->model('Model_Segitiga');
        $this->load->model('Model_Lingkaran');
    }

	public function index()
	{
	    $data = [
	        'persegi' => $this->Model_Persegi->hitungJumlah(),
            'segitiga' => $this->Model_Segitiga->hitungJumlah(),
            'lingkaran' => $this->Model_Lingkaran->hitungJumlah(),
        ];
		$this->load->view('welcome_message', $data);
	}
}
