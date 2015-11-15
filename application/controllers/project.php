<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		$this->load->model('login_m');
		$this->load->model('message_m');
		$this->load->model('notification_m');
		$this->load->model('project_m');
		$this->load->model('file_m');
		$this->load->model('watchlist_m');
		$this->load->model('user_m');
	}
	
	function get_basic_data(){
		
		$data = array(
			'user_msg' => $this->message_m->get_message(
					array(
						'user.USRID' => $this->session->userdata('USRID'),
						'message.MSGFLG' => 1
					),array(
						'user' => 'user.USRID=message.USRID'
					),array(0,10),array(
						'message.MSCRDT' => 'desc'
					)),
			'user_ntf' => $this->notification_m->get_notification(
					array(
						'user.USRID' => $this->session->userdata('USRID'),
						'ntfseenby.NTFFLG' => 1
					),array(
						'user' => 'user.USRID=notification.USRID',
						'ntfseenby' => 'ntfseenby.USRID=user.USRID and ntfseenby.NTFID=notification.NTFID'
					),array(0,10),array(
						'notification.NTFCRDT' => 'desc'
					)),
			'active' => 'project'
		);
		
		return $data;
	}
	
	public function index()
	{
		$data = $this->get_basic_data();
		$data['view'] = 'project/proj_main_v';
		$data['user_prj'] = $this->project_m->get_project(
					array(
						'pjcteam.USRID' => $this->session->userdata('USRID')
					),array(
						'pjcteam' => 'pjcteam.PJCID=project.PJCID',
						'user' => 'user.USRID=pjcteam.USRID'
					),null,array(
						'project.PJLMOD' => 'desc'
					));
		$this->load->view('main_v', $data);
	}
	
	public function view_project($id){
		$data = $this->get_basic_data();
		$data['view'] = 'project/proj_view_v';
		$data['user_prj'] = $this->project_m->get_project(
					array(
						'project.PJCID' => $id,
						'pjcteam.USRID' => $this->session->userdata('USRID')
					),array(
						'user' => 'user.USRID=project.USRID',
						'pjcteam' => 'pjcteam.USRID=user.USRID and pjcteam.PJCID=project.PJCID'
					),null,array(
						'project.PJLMOD' => 'desc'
					));
		
		if($data['user_prj']->num_rows()<=0) echo 'Error';
		else {
			$data['user_prj'] = $data['user_prj']->result_array()[0];
			$data['user_prj2'] = $this->project_m->get_project(
						array(
							'project.PJCID' => $id
						),array(
							'pjcteam' => 'pjcteam.PJCID=project.PJCID',
							'user' => 'user.USRID=pjcteam.USRID'
						),null,array(
							'project.PJLMOD' => 'desc'
						));
			$data['user_doc'] = $this->file_m->get_file(
						array(
							'project.PJCID' => $id,
							'substr(file.FILTYP,1,1)' => 'D'
						),array(
							'project' => 'project.PJCID=file.PJCID'
						),null,array(
							'file.FILMOD' => 'desc'
						));
			$data['user_tbl'] = $this->file_m->get_file(
						array(
							'project.PJCID' => $id,
							'file.FILTYP' => 'TBL'
						),array(
							'project' => 'project.PJCID=file.PJCID'
						),null,array(
							'file.FILMOD' => 'desc'
						));
			$data['user_wch'] = $this->watchlist_m->get_watchlist(
						array(
							'project.PJCID' => $id,
						),array(
							'project' => 'project.PJCID=watchlist.PJCID'
						),null,array(
							'watchlist.WCLMOD' => 'desc'
						));
			$this->load->view('main_v',$data);
		}
	}
	
	public function add_project(){
		$data = $this->get_basic_data();
		$data['view'] = 'project/proj_add_v';
		$data['user'] = $this->user_m->get_all_user();
		
		date_default_timezone_set('Asia/Jakarta');
		if($this->input->post('submit') == 'submit'){
			$proj_data = array(
				'PJCNME' => $this->input->post('project_name'),
				'PJCDESC' => $this->input->post('project_description'),
				'PJCPAR1' => $this->input->post('additional_info1'),
				'PJCPAR2' => $this->input->post('additional_info2'),
				'PJSTAT' => 1,
				'USRID' => $this->session->userdata('USRID'),
				'USE_USRID' => $this->session->userdata('USRID'),
				'PJLMOD' => date('Y-m-d H:i:s'),
				'PJCRDT' => date('Y-m-d H:i:s')
			);
			
			$insert_id = $this->project_m->add_project($proj_data);
			
			for($i=1; $i<$this->input->post('max_member'); $i++){
				$team_data = array(
					'PJCID' => $insert_id,
					'USRID' => $this->input->post('member'.$i),
					'PJTPOS' => $this->input->post('team_position'.$i),
					'PJTCRDT' => date('Y-m-d H:i:s')
				);
				
				$this->project_m->add_team_member($team_data);
			}
			
			redirect('project');
			
		}
		
		$this->load->view('main_v',$data);
	}
	
	
}
