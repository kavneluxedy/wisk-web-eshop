<?php
class User extends CI_Controller
{
    public function index()
    {
        $this->load->model('User_model');
        $users = $this->User_model->getAll();

        $data = array();
        $data['page_title'] = 'List of Users';
        $data['users'] = $users;

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('list', $data);
        $this->load->view('templates/footer');
    }

    // public function _remap($method)
    // {
    //     switch ($method)
    //     {
    //         case 'index' :
    //         break;
            
    //         case 'create' :
    //         break;
            
    //         case 'edit' :
    //         break;

    //         case 'delete' :
    //         break;
    //     }
    // }

    public function create()
    {
        $this->load->model('User_model');

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');

        $this->form_validation->set_rules('acc_username', 'Name', 'required');
        $this->form_validation->set_rules('acc_email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('create');
        } else {
            //Save records into Database 
            $formArray = array();
            $formArray['acc_username'] = $this->input->post('acc_username');
            $formArray['acc_pass'] = $this->input->post('acc_pass');
            $formArray['acc_email'] = $this->input->post('acc_email');
            $formArray['secret_id'] = $this->input->post('secret_id');
            $this->User_model->create($formArray);
            $this->session->set_flashdata('success', 'Records added successfully !');
            redirect(base_url('User', $formArray));
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

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('edit', $data);
        }
        else // Update user records
        {
            $formArray = array();
            $formArray['acc_username'] = $this->input->post('acc_username');
            $formArray['acc_email'] = $this->input->post('acc_email');
            $this->User_model->updateUser($acc_id, $formArray);
            $this->session->set_flashdata('success', 'Record updated successfully !');
            redirect(base_url('User'));
        }
        $this->load->view('templates/footer');
    }

    function delete($acc_id)
    {
        $this->load->model('User_model');
        $user = $this->User_model->getUser($acc_id);
        if (empty($user))
        {
            $this->session->set_flashdata('failure', 'Record not found in Database !');
            redirect(base_url('User'));
        } else 
        {
            $this->User_model->delete($acc_id);
            $this->session->set_flashdata('success', 'Record deleted successfully !');
            redirect(base_url('User'));
        }
    }

    public function login() {
        $this->load->view('templates/header');
        $this->load->view('login');
    }
}