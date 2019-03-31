<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Global_model extends CI_Model
{
	public function total_volume()
	{
		try {
			// $this->db->cache_on();
			$this->db->select_sum('volume');
			$query = $this->db->get('tm_unit')->row();
			return $query;
		} catch (Exception $e) {
			return false;
		}
	}

	public function total_harga()
	{
		try {
			// $this->db->cache_on();
			$this->db->select_sum('harga');
			$query = $this->db->get('tm_unit')->row();
			return $query;
		} catch (Exception $e) {
			return false;
		}
	}

	public function global_count()
	{
		try {
			// $this->db->cache_on();
			$total = array(
			'total_program' 	=> $this->db->count_all('t_program'),
			'total_kegiatan' 	=> $this->db->count_all('t_kegiatan'),
			'total_subkegiatan' => $this->db->count_all('t_subkegiatan'),
			'total_unit' 		=> $this->db->count_all('t_unit'),
			'total_volume' 		=> $this->total_volume(),
			'total_harga'  		=> $this->total_harga(),
			);
			return $total;
		} catch (Exception $e) {
			return false;
		}
	}

	public function total_harga_kegiatan($filters)
	{
		try {
			// $this->db->cache_on();
			$this->db->select_sum('harga');
			$this->db->from('tm_unit');
			$this->db->where('id_kegiatan', $filters);
			$query = $this->db->get()->row();
			return $query;
		} catch (Exception $e) {
			return false;
		}
	}

	public function total_volume_kegiatan($filters)
	{
		try {
			// $this->db->cache_on();
			$this->db->select_sum('volume');
			$this->db->from('tm_unit');
			$this->db->where('id_kegiatan', $filters);
			$query = $this->db->get()->row();
			return $query;
		} catch (Exception $e) {
			return false;
		}
	}

	public function total_harga_program($filters)
	{
		try {
			// $this->db->cache_on();
			$this->db->select_sum('harga');
			$this->db->from('tm_unit');
			$this->db->where('id_program', $filters);
			$query = $this->db->get()->row();
			return $query;
		} catch (Exception $e) {
			return false;
		}
	}

	public function total_volume_program($filters)
	{
		try {
			// $this->db->cache_on();
			$this->db->select_sum('volume');
			$this->db->from('tm_unit');
			$this->db->where('id_program', $filters);
			$query = $this->db->get()->row();
			return $query;
		} catch (Exception $e) {
			return false;
		}
	}

	public function balance_kegiatan($filters)
	{
		try {
			// $this->db->cache_on();
			$total = array(
				'total_volume_kegiatan'	=> $this->db->total_volume_kegiatan($filters),
				'total_harga_kegiatan' 	=> $this->db->total_harga_kegiatan($filters),
			);
			return $total;
		} catch (Exception $e) {
			return false;
		}
	}
}