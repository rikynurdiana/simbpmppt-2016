<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Class Master
*/
class Master extends CI_Controller
{
	public function __construct()
   	{
   		parent::__construct();
         $this->load->model('Global_model');
         $this->load->model('Master_model');
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
   		$this->load->view('dashboard/master/index', $data);
   	}

    public function program()
    {
        $data = array(
            'global_count'       => $this->Global_model->global_count(),
            'programs'           => $this->Master_model->get_program()
        );
        $this->load->view('dashboard/master/program/index', $data);
    }

      public function kegiatan()
      {
        $data = array(
            'global_count'       => $this->Global_model->global_count(),
            'programs'           => $this->Master_model->get_program(),
            'kegiatans'          => $this->Master_model->get_kegiatan()
        );
        $this->load->view('dashboard/master/kegiatan/index', $data);
      }

      public function subkegiatan()
      {
        $data = array(
            'global_count'       => $this->Global_model->global_count(),
            'kegiatans'          => $this->Master_model->get_kegiatan(),
            'subkegiatans'       => $this->Master_model->get_subkegiatan()
        );
        $this->load->view('dashboard/master/subkegiatan/index', $data);
      }

    public function unit()
    {
        $data = array(
            'global_count'       => $this->Global_model->global_count(),
            'kegiatans'          => $this->Master_model->get_kegiatan(),
            'subkegiatans'       => $this->Master_model->get_subkegiatan(),
            'units'              => $this->Master_model->get_unit()
        );
        $this->load->view('dashboard/master/unit/index', $data);
    }

    public function create_program()
    {
        if ($this->input->is_ajax_request()) {

            $data = array(
               'tipe'         => $this->input->post('tipe'),
               'kode_program' => $this->input->post('kode_program'),
               'nama_program' => $this->input->post('nama_program')
            );

            if ($this->Master_model->create_program($data) === true) {
                $response = array(
                    'id'        => $this->Master_model->LastID_program(),
                    'success'   => true,
                    'message'   => 'Berhasil Tambah Program'
                );
            } else {
                $response = array(
                    'success' => false,
                    'message' => 'Gagal Tambah Program'
                );
            }

            $this->output->set_content_type('application/json')->set_output(json_encode($response));
        } else {
            exit('Bukan Request Ajax');
        }
    }

    public function create_kegiatan()
    {
        if ($this->input->is_ajax_request()) {

            $data = array(
                'id_bidang'     => $this->input->post('id_bidang'),
                'id_program'    => $this->input->post('id_program'),
                'kode_kegiatan' => $this->input->post('kode_kegiatan'),
                'nama_kegiatan' => $this->input->post('nama_kegiatan')
            );

            if ($this->Master_model->create_kegiatan($data) === true) {
                $response = array(
                    'id'            => $this->Master_model->LastID_kegiatan(),
                    'kode_program'  => $this->input->post('kode_program'),
                    'kode_kegiatan' => $this->input->post('kode_kegiatan'),
                    'success'       => true,
                    'message'       => 'Berhasil Tambah Kegiatan'
                );
            } else {
                $response = array(
                    'success' => false,
                    'message' => 'Gagal Tambah Kegiatan'
                );
            }

            $this->output->set_content_type('application/json')->set_output(json_encode($response));
        } else {
            exit('Bukan Request Ajax');
        }
    }

    public function create_subkegiatan()
    {
        if ($this->input->is_ajax_request()) {

            $data = array(
                'id_program'       => $this->input->post('id_program'),
                'id_kegiatan'      => $this->input->post('id_kegiatan'),
                'kode_subkegiatan' => $this->input->post('kode_subkegiatan'),
                'nama_subkegiatan' => $this->input->post('nama_subkegiatan')
            );

            if ($this->Master_model->create_subkegiatan($data) === true) {
                $response = array(
                    'id'                => $this->Master_model->LastID_subkegiatan(),
                    'kode_program'      => $this->input->post('kode_program'),
                    'kode_kegiatan'     => $this->input->post('kode_kegiatan'),
                    'kode_subkegiatan'  => $this->input->post('kode_subkegiatan'),
                    'success'           => true,
                    'message'           => 'Berhasil Tambah Sub Kegiatan'
                );
            } else {
                $response = array(
                    'success' => false,
                    'message' => 'Gagal Tambah Sub Kegiatan'
                );
            }

            $this->output->set_content_type('application/json')->set_output(json_encode($response));
        } else {
            exit('Bukan Request Ajax');
        }
    }

    public function create_unit()
    {
        if ($this->input->is_ajax_request()) {

            $data = array(
                'id_program'      => $this->input->post('id_program'),
                'id_kegiatan'     => $this->input->post('id_kegiatan'),
                'id_subkegiatan'  => $this->input->post('id_subkegiatan'),
                'kode_unit'       => rand(11,99),
                'nama_unit'       => $this->input->post('nama_unit'),
                'volume'          => $this->input->post('volume'),
                'satuan'          => $this->input->post('satuan'),
                'harga'           => $this->input->post('harga')
            );

            if ($this->Master_model->create_unit($data) === true) {
                $response = array(
                    'id'                => $this->Master_model->LastID_unit(),
                    'kode_program'      => $this->input->post('kode_program'),
                    'kode_kegiatan'     => $this->input->post('kode_kegiatan'),
                    'kode_subkegiatan'  => $this->input->post('kode_subkegiatan'),
                    'success'           => true,
                    'message'           => 'Berhasil Tambah Unit Sub Kegiatan'
                );
            } else {
                $response = array(
                    'success' => false,
                    'message' => 'Gagal Tambah Unit Sub Kegiatan'
                );
            }

            $this->output->set_content_type('application/json')->set_output(json_encode($response));
        } else {
            exit('Bukan Request Ajax');
        }
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
        $this->load->view('dashboard/master/filter_program', $data );
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
        $this->load->view('dashboard/master/filter_kegiatan', $data );
    }

}