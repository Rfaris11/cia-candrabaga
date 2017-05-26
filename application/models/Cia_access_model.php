<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cia_access_model extends CI_Model {

	public function insertCiaAccess($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	}
}
