<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Class Lra
*/
class Lra extends CI_Controller
{
	public function __construct()
   	{
		parent::__construct();
		$this->load->model('Global_model');
        $this->load->database();
        $this->load->helper(array('url','html','form'));
   	}

   	public function index()
   	{
   		$data = array(
            'global_count'       => $this->Global_model->global_count(),
        );
   		$this->load->view('dashboard/lra/index', $data);
   	}
}