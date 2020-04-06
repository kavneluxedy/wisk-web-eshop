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
		$data = array();

		$users = $this->User_model->getUsers();
		$data['users'] = $users;
		$data['page_title'] = 'Wisk E-Sport | Utilisateurs';

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

			$data = array();
			$data['acc_username'] = $this->input->post('acc_username');
			$data['acc_pass'] = $this->input->post('acc_pass');
			$data['acc_email'] = $this->input->post('acc_email');
			$data['secret_id'] = $this->input->post('secret_id');

			$this->load->model('User_model');
			$this->User_model->create($data);

			$this->session->set_flashdata('success', 'Records added successfully !');
			redirect(site_url('User', $data));
		}
	}

	function edit($acc_id)
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');

		$this->load->model('User_model');
		$data = array();
		$user = $this->User_model->getUser($acc_id);
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
			redirect(site_url('User'));
		}
		$this->load->view('templates/footer');
	}

	function delete($acc_id)
	{
		$this->load->model('User_model');
		$user = $this->User_model->getUser($acc_id);
		if (empty($user)) {
			$this->session->set_flashdata('failure', 'Record not found in Database !');
			redirect(site_url('User'));
		} else {
			$this->User_model->delete($acc_id);
			$this->session->set_flashdata('success', 'Record deleted successfully !');
			redirect(site_url('User'));
		}
	}

	public function login()
	{
		if ($this->input->post()) {
			$e = $this->input->post("acc_username_signIn");
			$p = $this->input->post("acc_pass_signIn");
			if ($this->auth->login($e, $p, "acc_id")) {
				redirect(site_url("crud/liste"));
			} else {
				redirect(site_url("aut/login"));
			}
		}

		$this->load->view("header");
		$this->load->view("aut/login");
		$this->load->view("footer");
	}
}
