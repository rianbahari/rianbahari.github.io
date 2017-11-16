<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user','',TRUE);
	 }

	function index()
	{
		//This method will have the credentials validation
		$this->load->library('form_validation');

		$this->form_validation->set_rules('user_name', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('user_password', 'Password', 'trim|required|xss_clean|callback_check_database');

		if($this->form_validation->run() == FALSE)
		{
			//Field validation failed.  User redirected to login page
			$this->load->view('login_lr');
		}
		else
		{
			//Go to private area
//			$this->load->view('admin');
			$baseurl = base_url()."admin";
			$this->output->set_header('refresh:0.01; url='.$baseurl.'');	 
			// redirect('home', 'refresh');
		}
	}

	function check_database($password)
	{
		//Field validation succeeded.  Validate against database
		$username = $this->input->post('user_name');

		//query the database
		$result = $this->user->login($username, $password);

		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
					'user_id' => $row->user_id,
					'user_name' => $row->user_name,
					'nama_user' => $row->nama_user,
					'user_title' => $row->user_title
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}
 
	function logout()
	{
		$this->session->sess_destroy();
//		$this->load->view('succLogout');		
		$baseurl = base_url()."login";
		$this->output->set_header('refresh:0.02; url='.$baseurl.'');	 
	}
}
?>