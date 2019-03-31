<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Class Kendali
*/
class Kendali extends CI_Controller
{
	public function __construct()
   	{
		parent::__construct();
		$this->load->model(array('Global_model','Master_model'));
        $this->load->database();
        $this->load->helper(array('url','html','form'));
   	}

   	public function index()
   	{
        $data = array(
            'global_count'  => $this->Global_model->global_count(),
            'programs'      => $this->Master_model->get_program(),
            'kegiatans'     => $this->Master_model->get_kegiatan(),
            'all_unit'      => $this->Master_model->all_unit()
        );
   		$this->load->view('dashboard/kendali/index', $data);
   	}

    public function filter_program()
    {
        $data = array(
            'global_count'          => $this->Global_model->global_count(),
            'total_harga_program'   => $this->Global_model->total_harga_program($this->input->post('id_program')),
            'total_volume_program'  => $this->Global_model->total_volume_program($this->input->post('id_program')),
            'programs'              => $this->Master_model->get_program(),
            'kegiatans'             => $this->Master_model->get_kegiatan(),
            'subkegiatans'          => $this->Master_model->get_subkegiatan(),
            'filters'               => $this->Master_model->filter_program($this->input->post('id_program'))
        );
        $this->load->view('dashboard/kendali/filter_program', $data );
    }

    public function filter_kegiatan()
    {
        $data = array(
            'global_count'          => $this->Global_model->global_count(),
            'total_harga_kegiatan'  => $this->Global_model->total_harga_kegiatan($this->input->post('id_kegiatan')),
            'total_volume_kegiatan' => $this->Global_model->total_volume_kegiatan($this->input->post('id_kegiatan')),
            'programs'              => $this->Master_model->get_program(),
            'kegiatans'             => $this->Master_model->get_kegiatan(),
            'subkegiatans'          => $this->Master_model->get_subkegiatan(),
            'filters'               => $this->Master_model->filter_kegiatan($this->input->post('id_kegiatan')),
            'filter_unit'           => $this->Master_model->filter_unit($this->input->post('id_kegiatan'))
        );
        $this->load->view('dashboard/kendali/filter_kegiatan', $data );
    }

    public function input_triwulan()
    {
         $data = array(
            'global_count'          => $this->Global_model->global_count(),
            'total_harga_kegiatan'  => $this->Global_model->total_harga_kegiatan($this->input->post('id_kegiatan')),
            'total_volume_kegiatan' => $this->Global_model->total_volume_kegiatan($this->input->post('id_kegiatan')),
            'programs'              => $this->Master_model->get_program(),
            'kegiatans'             => $this->Master_model->get_kegiatan(),
            'subkegiatans'          => $this->Master_model->get_subkegiatan(),
            'filters'               => $this->Master_model->filter_kegiatan($this->input->post('id_kegiatan')),
            'filter_unit'           => $this->Master_model->filter_unit($this->input->post('id_kegiatans'))
        );
        $this->load->view('dashboard/kendali/input_triwulan', $data );
    }

    public function update()
    {
        $data = array (
            'triwulan1' => $this->input->post('triwulan1'),
            'triwulan2' => $this->input->post('triwulan2'),
            'triwulan3' => $this->input->post('triwulan3'),
            'triwulan4' => $this->input->post('triwulan4')
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tk_unit', $data);
    }

}