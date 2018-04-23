<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

  function _insert($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	function _update($table, $id, $where, $data)
	{
		$this->db->where($id, $where);
		return $this->db->update($table, $data);
	}

	function _delete($table, $id, $where)
	{
		$this->db->where($id, $where);
		$this->db->delete($table);
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

}
