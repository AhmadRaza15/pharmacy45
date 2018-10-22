<?php

class Project extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Main_model');

	}
	public function index()
	{
		if($this->input->post("btn_login") == "Login")
		{
			$email=$this->input->post('admin_email');
			$password=$this->input->post('admin_password');
			$row=$this->Main_model->check_admin($email,$password);
			if(count($row) > 0)
			{
				$session_data=array(
                                         'admin_id'       =>   $row->admin_id,
                                         'admin_name'     =>   $row->admin_name,
                                         'admin_email'    =>   $row->admin_email
				);
				$this->session->set_userdata($session_data);
				redirect('Admin_c');
			}
			else
			{
				$this->session->set_flashdata('msg','Invalid Email or Password');
				redirect('Project');
			}
		}
		else
		{
			$this->load->view('login_view.php');
		}
	}
	public function sign_out()
	{
		$this->session->sess_destroy();
		redirect('Project/index');
	}
	// public function customer()
	// {
	// 	if($this->input->post('btn_login'))
	// 	{
	// 		$email=$this->input->post('customer_email');
	// 		$password=$this->input->post('customer_password');
	// 		$row=$this->Main_model->check_customer($email,$password);
	// 		// print_r($row);
	// 		// die();
	// 		if(count($row) > 0)
	// 		{
 //               $session_data=array(
 //                                   'c_id'=>$row->c_id,
 //                                   'customer_name'=>$row->customer_name,
 //                                   'customer_email'=>$row->customer_email,
 //                                   'customer_password'=>$row->customer_password
 //               );
 //               $this->session->set_userdata($session_data);
 //             redirect('Admin_c/add_order');
               
	// 		}
	// 		else
	// 		{
	// 			$this->session->set_flashdata('msg','Invalid Email and password');
	// 			redirect('Project/customer');
	// 		}
	// 	}
	// 	else
	// 	{
	// 		$this->load->view('customer_login');
	// 	}
	// }
}

?>