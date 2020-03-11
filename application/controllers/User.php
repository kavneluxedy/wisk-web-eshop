<?php
class User extends CI_Controller
{
	// public function __construct()
	// {
	//     // parent::__construct();
	//     $this->load->model('User_model');
	// }

	public function index()
	{
		$this->load->model('User_model');
		$users = $this->User_model->getUsers();

		$data = array();
		$data['page_title'] = 'Wisk E-Sport | Utilisateurs';
		$data['users'] = $users;

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('list', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');

		$this->form_validation->set_rules('acc_username', 'Name', 'required');
		$this->form_validation->set_rules('acc_email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('create');
		} else {

			$this->load->model('User_model');

			$data = array();
			$data['username'] = $this->input->post('acc_username');
			$data['pass'] = $this->input->post('acc_pass');
			$data['email'] = $this->input->post('acc_email');
			$data['secret_id'] = $this->input->post('secret_id');

			$this->User_model->create($data);

			$this->session->set_flashdata('success', 'Records added successfully !');
			redirect(base_url('User', $data));
		}
	}

	function edit($acc_id)
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');

		$this->load->model('User_model');
		$user = $this->User_model->getUser($acc_id);

		$data = array();
		$data['user'] = $user;

		$this->form_validation->set_rules('acc_username', 'Name', 'required');
		$this->form_validation->set_rules('acc_email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('edit', $data);
		} else // Update user records
		{
			$data = array();
			$data['acc_username'] = $this->input->post('acc_username');
			$data['acc_email'] = $this->input->post('acc_email');

			$this->User_model->updateUser($acc_id, $data);
			$this->session->set_flashdata('success', 'Record updated successfully !');
			redirect(base_url('User'));
		}
		$this->load->view('templates/footer');
	}

	function delete($acc_id)
	{
		$this->load->model('User_model');
		$user = $this->User_model->getUser($acc_id);
		if (empty($user)) {
			$this->session->set_flashdata('failure', 'Record not found in Database !');
			redirect(base_url('User'));
		} else {
			$this->User_model->delete($acc_id);
			$this->session->set_flashdata('success', 'Record deleted successfully !');
			redirect(base_url('User'));
		}
	}


	public function login()
	{
		$this->load->model('User_model');

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('login');
		$this->load->view('templates/footer');

		$data = array();
		$data['login'] = $this->input->post('acc_username');
		$data['pwd'] = $this->input->post('acc_pass');
		var_dump($data);
		
	}
}
