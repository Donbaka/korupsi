<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Watchlist extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		$this->load->model('login_m');
		$this->load->model('message_m');
		$this->load->model('notification_m');
		$this->load->model('watchlist_m');
		$this->load->model('project_m');
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
			'active' => 'watchlist'
		);
		
		return $data;
	}
	
	public function index()
	{
		$data = $this->get_basic_data();
		$data['view'] = 'watchlist/wtch_main_v';
		$data['user_wch'] = $this->watchlist_m->get_watchlist(
					array(
						'pjcteam.USRID' => $this->session->userdata('USRID')
					),array(
						'project' => 'project.PJCID=watchlist.PJCID',
						'pjcteam' => 'pjcteam.PJCID=project.PJCID',
						'user' => 'user.USRID=pjcteam.USRID'
					),null,array(
						'watchlist.WCLMOD' => 'desc'
					));
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
	
	public function add_watchlist($id){
		$data['user_prj'] = $this->project_m->get_project(
					array(
						'pjcteam.USRID' => $this->session->userdata('USRID'),
						'pjcteam.PJCID' => $id
					),array(
						'pjcteam' => 'pjcteam.PJCID=project.PJCID',
						'user' => 'user.USRID=pjcteam.USRID'
					),null,array(
						'project.PJLMOD' => 'desc'
					));
		
		if($data['user_prj']->num_rows()<=0){
			$this->load->view('errors/cli/error_404');
		} else {
			$data = $this->get_basic_data();
			$data['view'] = 'watchlist/wtch_add_v';
			$data['project_id'] = $id;
			
			if($this->input->post('submit') == 'submit'){
				
				$query = $this->input->post('query');
				
				date_default_timezone_set('Asia/Jakarta');
				$query = $this->input->post('query');
				$table_list = array();
				
				$array = preg_split("/((\r?\n)|(\r\n?))/", $query);
				foreach($array as $line){
					if (strpos($line,'CREATE VIEW') !== false) {echo 'nemu';
						$i=0;
						$stat = false;
						$str_check = '';
						while($stat == false){
							if(substr($line,$i,2) == 'AS'){
								$stat = true;
							} else {
								$str_check .= substr($line,$i,1);
								$i++;
							}
						}
						
						$str_check = str_replace("CREATE VIEW", "", $str_check);
						$str_check = str_replace("AS", "", $str_check);
						$str_check = str_replace("IF", "", $str_check);
						$str_check = str_replace("NOT", "", $str_check);
						$str_check = str_replace("EXISTS", "", $str_check);
						$str_check = str_replace("`", "", $str_check);
						$str_check = str_replace("'", "", $str_check);
						$str_check = str_replace("{", "", $str_check);
						$str_check = str_replace("(", "", $str_check);
						
						$str_check = preg_replace('/\s+/', '', $str_check);
						
						$table_list[] = $str_check;
					}
					
				}
				
				$err_check = '';
				
				echo $query;
				var_dump($table_list);
				
				
				$link = mysqli_connect("localhost", "root", "", "corrupt_det_db");
				if (mysqli_multi_query($link, $query)) {
					do {
						if ($result = mysqli_store_result($link)) {
							while ($row = mysqli_fetch_row($result)) {
								printf("%s\n", $row[0]);
							}
							mysqli_free_result($result);
						}
						if (mysqli_more_results($link)) {
							printf("-----------------\n");
						}
					} while (mysqli_next_result($link));
				}
				
				
				try{
					//$this->file_m->query($query);
					
				} catch(Exception $e){
					$err_check = $e->getMessage();
					echo $e->getMessage();
				}
				
				
				if($err_check == ''){
					foreach($table_list as $val){
						$table_data = array(
							'USRID' => $this->session->userdata('USRID'),
							'USE_USRID' => $this->session->userdata('USRID'),
							'PJCID' => $id,
							'WCHNME' => $this->input->post('name'),
							'WCHLINK' => $val,
							'WCHDESC' => $this->input->post('description'),
							'WCHQRY' => $query,
							'WCSTAT' => 1,
							'WCLMOD' => date('Y-m-d H:i:s'),
							'WCCRDT' => date('Y-m-d H:i:s')
						);
						
						$this->watchlist_m->add_watchlist($table_data);
					}
					
				}
				
				redirect('watchlist');
				
			}
			
			$this->load->view('main_v', $data);
		}
		
		
	}
	
	
}
