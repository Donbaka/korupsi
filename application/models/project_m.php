<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_M extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function get_all_message(){
		return $this->db->select('*')
				->from('project')
				->get();
	}
	
	public function add_project($data){
		$this->db->insert('project',$data);
		return $this->db->insert_id();
	}
	
	public function add_team_member($data){
		$this->db->insert('pjcteam',$data);
	}
	
	public function get_project($param, $join_par, $lim_par, $ord_par){
		foreach($param as $key => $val){
			$this->db->where($key,$val);
		}
		
		$this->db->select('*');
		$this->db->from('project');
				
		if($join_par != null){
			foreach($join_par as $key=>$val){
				$this->db->join($key,$val);
			}
		}
		
		if($lim_par != null){
			$this->db->limit($lim_par[0],$lim_par[1]);
		}
		
		if($ord_par != null){
			foreach($ord_par as $key=>$val){
				$this->db->order_by($key,$val);
			}
		}
		
		return $this->db->get();
	}
}
