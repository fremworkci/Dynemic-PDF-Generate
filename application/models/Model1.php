<?php
class Model1 extends CI_Model
{
	function fetch()
	{
		$this->db->select("*");
		$this->db->from("login");
		$qry=$this->db->get();
		return $qry->result();
	}


	function pdfmodel($id)
	{
		$this->db->where('id', $id);
		$this->db->select("*");
		$this->db->from('login');
		$qry = $this->db->get();
		return $qry->result();
	}


	
}

?>