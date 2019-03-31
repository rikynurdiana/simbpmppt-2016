<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model
{
	public function get_program()
	{
		// $this->db->cache_on();
		$this->db->select('id id_program, kode_program, nama_program');
		$this->db->from('tm_program');
		$this->db->order_by('kode_program', 'asc');
		$query = $this->db->get();

		if($query->num_rows() != 0)
        {
            return $query->result();
        }
        else
        {
        	return false;
    	}
	}

	public function get_kegiatan()
	{
		// $this->db->cache_on();
		$this->db->select('p.id id_program , p.kode_program, p.nama_program , k.id id_kegiatan , k.kode_kegiatan, k.nama_kegiatan,');
		$this->db->from('tm_kegiatan k');
		$this->db->join('tm_program p', 'k.id_program = p.id', 'left');
		$this->db->order_by('p.kode_program', 'asc');
		$query = $this->db->get();

		if($query->num_rows() != 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
	}

	public function get_subkegiatan()
	{
		// $this->db->cache_on();
		$this->db->select('p.id id_program , p.kode_program , p.nama_program,
						   k.id id_kegiatan , k.kode_kegiatan , k.nama_kegiatan,
						   s.id id_subkegiatan , s.kode_subkegiatan , s.nama_subkegiatan');
		$this->db->from('tm_subkegiatan s');
		$this->db->join('tm_program p', 's.id_program = p.id', 'left');
		$this->db->join('tm_kegiatan k', 's.id_kegiatan = k.id', 'left');
		$this->db->group_by('s.kode_subkegiatan');
		$this->db->order_by('p.kode_program', 'asc');
		$query = $this->db->get();

		if($query->num_rows() != 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
	}

	public function get_unit()
	{
		// $this->db->cache_on();
		$this->db->select('*');
		$this->db->from('tm_unit u');
		$this->db->join('tm_program p', 'u.id_program = p.id', 'left');
		$this->db->join('tm_kegiatan k', 'u.id_kegiatan = k.id', 'left');
		$this->db->join('tm_subkegiatan s', 'u.id_subkegiatan = s.id', 'left');
		$this->db->order_by('p.kode_program', 'asc');
		$query = $this->db->get();

		if($query->num_rows() != 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
	}

	public function LastID_program()
	{
		try {
			// $this->db->cache_on();
			$this->db->select_max('id');
			$result = $this->db->get('tm_program')->row();
		    return $result->id;
		} catch (Exception $e) {
			return false;
		}
	}

	public function LastID_kegiatan()
	{
		try {
			// $this->db->cache_on();
			$this->db->select_max('id');
			$result = $this->db->get('tm_kegiatan')->row();
		    return $result->id;
		} catch (Exception $e) {
			return false;
		}
	}

	public function LastID_subkegiatan()
	{
		try {
			// $this->db->cache_on();
			$this->db->select_max('id');
			$result = $this->db->get('tm_subkegiatan')->row();
		    return $result->id;
		} catch (Exception $e) {
			return false;
		}
	}

	public function LastID_unit()
	{
		try {
			// $this->db->cache_on();
			$this->db->select_max('id');
			$result = $this->db->get('tm_unit')->row();
		    return $result->id;
		} catch (Exception $e) {
			return false;
		}
	}

	public function create_program($data)
	{
		$this->db->trans_begin();

		$this->db->insert('t_program', $data);
		$this->db->insert('tm_program', $data);
		$this->db->insert('tk_program', $data);

		if ($this->db->trans_status() === FALSE)
		{
		    $this->db->trans_rollback();
		    return false;
		}
		else
		{
		    $this->db->trans_commit();
		    return true;
		}
	}

	public function create_kegiatan($data)
	{
		$this->db->trans_begin();

		$this->db->insert('t_kegiatan', $data);
		$this->db->insert('tm_kegiatan', $data);
		$this->db->insert('tk_kegiatan', $data);

		if ($this->db->trans_status() === FALSE)
		{
		    $this->db->trans_rollback();
		    return false;
		}
		else
		{
		    $this->db->trans_commit();
		    return true;
		}
	}

	public function create_subkegiatan($data)
	{
		$this->db->trans_begin();

		$this->db->insert('t_subkegiatan', $data);
		$this->db->insert('tm_subkegiatan', $data);
		$this->db->insert('tk_subkegiatan', $data);

		if ($this->db->trans_status() === FALSE)
		{
		    $this->db->trans_rollback();
		    return false;
		}
		else
		{
		    $this->db->trans_commit();
		    return true;
		}
	}

	public function create_unit($data)
	{
		$this->db->trans_begin();

		$this->db->insert('t_unit', $data);
		$this->db->insert('tm_unit', $data);
		$this->db->insert('tk_unit', $data);

		if ($this->db->trans_status() === FALSE)
		{
		    $this->db->trans_rollback();
		    return false;
		}
		else
		{
		    $this->db->trans_commit();
		    return true;
		}
	}

	public function filter_program($filters)
	{
		// $this->db->cache_on();
		$this->db->select('p.kode_program, k.kode_kegiatan, k.nama_kegiatan, p.nama_program, SUM(u.volume) * SUM(u.harga) as total');
		$this->db->from('tk_unit u');
		$this->db->join('tk_program p', 'u.id_program = p.id', 'left');
		$this->db->join('tk_kegiatan k', 'u.id_kegiatan = k.id', 'left');
		$this->db->join('tk_subkegiatan s', 'u.id_subkegiatan = s.id', 'left');
		$this->db->where('u.id_program', $filters);
		$this->db->group_by('u.id_kegiatan');
		$query = $this->db->get();

		if($query->num_rows() != 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
	}

   	public function filter_kegiatan($filters)
	{
		// $this->db->cache_on();
		$this->db->select('p.kode_program, k.kode_kegiatan, s.kode_subkegiatan, s.nama_subkegiatan, k.nama_kegiatan , SUM(u.volume) * SUM(u.harga) as total');
		$this->db->from('tk_unit u');
		$this->db->join('tk_program p', 'u.id_program = p.id', 'left');
		$this->db->join('tk_kegiatan k', 'u.id_kegiatan = k.id', 'left');
		$this->db->join('tk_subkegiatan s', 'u.id_subkegiatan = s.id', 'left');
		$this->db->where('u.id_kegiatan', $filters);
		$this->db->group_by('u.id_subkegiatan');
		$query = $this->db->get();

		if($query->num_rows() != 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
	}

	public function filter_subkegiatan($filters)
	{
		// $this->db->cache_on();
		$this->db->select('p.kode_program, k.kode_kegiatan, s.kode_subkegiatan, s.nama_subkegiatan, k.nama_subkegiatan , SUM(u.volume) * SUM(u.harga) as total');
		$this->db->from('tk_unit u');
		$this->db->join('tk_program p', 'u.id_program = p.id', 'left');
		$this->db->join('tk_kegiatan k', 'u.id_kegiatan = k.id', 'left');
		$this->db->join('tk_subkegiatan s', 'u.id_subkegiatan = s.id', 'left');
		$this->db->where('u.id_subkegiatan', $filters);
		$this->db->group_by('u.id_subkegiatan');
		$query = $this->db->get();

		if($query->num_rows() != 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
	}

	public function filter_unit($filters)
	{
		// $this->db->cache_on();
		$this->db->select('*,u.id id_unit');
		$this->db->from('tk_unit u');
		$this->db->join('tk_program p', 'u.id_program = p.id', 'left');
		$this->db->join('tk_kegiatan k', 'u.id_kegiatan = k.id', 'left');
		$this->db->join('tk_subkegiatan s', 'u.id_subkegiatan = s.id', 'left');
		$this->db->where('u.id_kegiatan', $filters);
		$this->db->order_by('u.id', 'asc');
		$query = $this->db->get();

		if($query->num_rows() != 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
	}

	public function all_unit()
	{
		// $this->db->cache_on();
		$this->db->select('*');
		$this->db->from('tk_unit u');
		$this->db->join('tk_program p', 'u.id_program = p.id', 'left');
		$this->db->join('tk_kegiatan k', 'u.id_kegiatan = k.id', 'left');
		$this->db->join('tk_subkegiatan s', 'u.id_subkegiatan = s.id', 'left');
		$this->db->order_by('u.id_kegiatan', 'asc');
		$query = $this->db->get();

		if($query->num_rows() != 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
	}

}