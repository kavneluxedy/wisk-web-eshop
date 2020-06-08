<?php
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function welcome()
    {
        $data = array();
        $data['page_title'] = 'Bienvenue sur mon Site Web ' . $this->session->userdata['acc_username'];

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('admin/welcome', $data);
        $this->load->view('templates/footer');
    }

    public function index()
    {
        $this->load->model('User_model');
        $users = $this->User_model->getUsers();

        $data = array();
        $data['page_title'] = 'MON SITE | Utilisateurs';
        $data['users'] = $users;

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('list', $data);
        $this->load->view('templates/footer');
    }

    public function admin()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('admin/admin');
        $this->load->view('templates/footer');
    }

    public function regex_check($str)
    {
        if (preg_match("/^(?:'[A-Za-z](([\._\-][A-Za-z0-9])|[A-Za-z0-9])*[a-z0-9_]*')$/", $str)) {
            $this->form_validation->set_message('regex_check', 'The %s field is not valid!');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');

        $this->form_validation->set_rules('acc_username', 'login', 'required|min_length[3]|max_length[50]');
        // $this->form_validation->set_rules(['label' => 'acc_username', 'field' => 'acc_username', 'rules' => 'required|min_length[3]|max_length[50]|callback_check_acc_username_exists']);

        $this->form_validation->set_rules('acc_email', 'email_adress', 'required|valid_email|max_length[255]');
        // $this->form_validation->set_rules(['label' => 'acc_email', 'field' => 'acc_email', 'rules' => 'required|valid_email|callback_check_acc_email_exists']);

        $this->form_validation->set_rules('acc_pass', 'password', 'required|min_length[8]');
        // $this->form_validation->set_rules(['label' => 'acc_pass', 'field' => 'acc_pass', 'rules' => 'trim/required|min_length[8]']);

        $this->form_validation->set_rules(['acc_passconf', 'password_confirmation', 'required|matches[acc_pass]']);
        // $this->form_validation->set_rules(['label' => 'acc_passconf', 'field' => 'acc_passconf', 'rules' => 'required|matches[acc_pass]']);

        $this->form_validation->set_rules('secret_id', 'secret_question', 'required');
        // $this->form_validation->set_rules(['label' => 'secret_id', 'field' => 'secret_id', 'rules' => 'required']);

        if ($this->form_validation->run() === true) {
            $data = array(
                'acc_username'      => htmlspecialchars($this->input->post('acc_username')),
                'acc_email'         => htmlspecialchars($this->input->post('acc_email')),
                'acc_pass'          => md5($this->input->post('acc_pass')),
                'acc_passconf'      => md5($this->input->post('acc_passconf')),
                'secret_id'         => intval($this->input->post('secret_id'))
            );
            $this->User_model->create($data);
            $this->session->set_userdata($data);
            $this->session->set_flashdata('success', 'Records added successfully !');
            $this->load->view('admin/welcome');
        } else {
            $this->load->view('create');
        }
    }

    public function edit($acc_id)
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');

        $this->load->model('User_model');
        $user = $this->User_model->getUser($acc_id);

        $data = array();
        $data['user'] = $user;

        $this->form_validation->set_rules('acc_username', 'Name', 'required|max_length[50]');
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

    public function delete($acc_id)
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
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $data['title'] = 'Log In';
        $this->load->view('login', $data);
        $this->load->view('templates/footer');
    }

    public function login_validation()
    {
        $this->form_validation->set_rules('acc_username', 'Username', 'required|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('acc_pass', 'Password', 'required|min_length[8]');

        // Traitement du formulaire de connexion
        if ($this->form_validation->run() == TRUE) { // Si le formulaire a été envoyé sans respecter les règles de validation du login

            // Get values passe from login.php
            $data = array();
            $username = $this->input->post('acc_username');
            $acc_pass = $this->input->post('acc_pass');

            // Prevent MySql Injections
            $username = $data['acc_username'];
            $password = $data['acc_pass'];

            // Model function
            if ($this->user_model->can_login($username, $password)) {
                $session_data = array(
                    'username' => $username
                );

                $this->session->set_flashdata('login_success', 'You are now logged in.');
                $this->session->set_userdata($session_data);
                redirect(base_url('admin/welcome'));
            } else {
                $this->session->set_flashdata('login_failed', 'Invalid Username & Password');
                redirect(base_url('User/login'));
            }
        } else { //Les valeurs de connection au compte utilisateur sont fausses
            $this->login();
        }
    }

    function enter()
    {
        if ($this->session->userdata('username') != '') {
            echo '<2> Welcome - ' . $this->session->userdata('username') . ' ! ';
            echo '<label><a href="' . base_url('User/login') . '"Back</a/</label>';
        } else {
            redirect(base_url('User/login'));
        }
    }

    function logout()
    {
        $this->session->unset_userdata($_SESSION);
        redirect(base_url('User/login'));
    }
}

function check_email_exists($acc_email)
{
}
