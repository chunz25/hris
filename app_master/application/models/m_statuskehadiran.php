<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class m_statuskehadiran extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function getStatusKehadiran(){
		$this->load->database();
		$q = $this->db->query("select statusid as id, status as text from public.statusabsensi order by cast(statusid as int)");
		$this->db->close();
		return $q->result_array();
	}
}