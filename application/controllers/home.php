<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		$this->load->model('login_m');
		$this->load->model('message_m');
		$this->load->model('notification_m');
	}
	
	public function index()
	{
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
			'active' => 'dashboard',
			'view' => 'dashboard/dash_main_v'
		);
		$this->load->view('main_v', $data);
	}
}
