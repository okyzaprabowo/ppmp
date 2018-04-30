<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

  function _insert($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	function _update($table, $id, $where, $data)
	{
		$this->db->where($where, $id);
		$this->db->update($table, $data);
	}

	function _delete($table, $id, $where)
	{
		$this->db->where($id, $where);
		$this->db->delete($table);
	}

  function _find_data($table, $where, $param)
  {
  	$this->db->select('*')
  	->where($where,$param)
  	->from($table);

  	$get = $this->db->get();

  	if($get->num_rows() > 0)
  	{
  		return $get->result();
  	}
  	else
  	{
  		return 0;
  	}
  }

  function _get_by_id($table, $where1, $param1, $where2 = NULL, $param2 = NULL)
	{
		$this->db->from($table);
		$this->db->where($where1, $param1);
		if(!is_null($where2))
		{
			$this->db->where($where2, $param2);
		}

		$query = $this->db->get();

		return $query->row();
	}

  function _get_data($select, $table, $where = NULL, $param = NULL, $orderby = NULL, $sortby = NULL)
	{
		$this->db->select($select);
		$this->db->from($table);
    if(!is_null($where)){
			$this->db->where($where, $param);
		}
    if(!is_null($orderby)){
			$this->db->order_by($orderby, $sortby);
		}

		$get = $this->db->get();

		if($get->num_rows() > 0)
    {
        return $get->result();
    }
    else
    {
        return 0;
    }
	}

  function _get_data_join($select, $from, $join1 = NULL, $whereJoin1 = NULL, $join2 = NULL, $whereJoin2 = NULL, $where1 = NULL, $param1 = NULL, $where2 = NULL, $param2 = NULL, $order = NULL)
	{
		$this->db->select($select);
		$this->db->from($from);
		if(!is_null($join1)){
			$this->db->join($join1, $whereJoin1);
		}
		if(!is_null($join2)){
			$this->db->join($join2, $whereJoin2);
		}
		if(!is_null($where1)){
			$this->db->where($where1, $param1);
		}
		if(!is_null($where2)){
			$this->db->where($where2, $param2);
		}
		if (!is_null($order)){
			$this->db->order_by($order, 'asc');
		}

    $get = $this->db->get();

		if($get->num_rows() > 0)
    {
        return $get->result();
    }
    else
    {
        return 0;
    }
	}

  function custom_query($mysql_query)
  {
  	$query = $this->db->query($mysql_query);
  	return $query->result();
  }

  function get_find_query($select)
	{
		$this->db->select($select);
		$query = $this->db->get();
		return $query->row();
	}

  function check_table($table, $where, $name, $where2 = NULL, $name2 = NULL, $where3 = NULL, $name3 = NULL,
			$where4 = NULL, $name4 = NULL, $where5 = NULL, $name5 = NULL, $where6 = NULL, $name6 = NULL,
			$where7 = NULL, $name7 = NULL, $where8 = NULL, $name8 = NULL)
	{
		$this->db->from($table);
		$this->db->where($where, strtoupper($name));
		if (!is_null($name2)){
			$this->db->where($where2, strtoupper($name2));
		}
		if (!is_null($name3)){
			$this->db->where($where3, strtoupper($name3));
		}
		if (!is_null($name4)){
			$this->db->where($where4, strtoupper($name4));
		}
		if (!is_null($name5)){
			$this->db->where($where5, strtoupper($name5));
		}
		if (!is_null($name6)){
			$this->db->where($where6, strtoupper($name6));
		}
		if (!is_null($name7)){
			$this->db->where($where7, strtoupper($name7));
		}
		if (!is_null($name8)){
			$this->db->where($where8, strtoupper($name8));
		}

		$query = $this->db->get();
		return $query->row();
	}

}
