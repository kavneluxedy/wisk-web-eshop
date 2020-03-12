<?php
class Store extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Store_model');
		// $this->load->library('session');
	}

	public function index() // Accueil de la boutique
	{
		$this->load->model('Store_model');
		$items = $this->Store_model->getItems();

		$data = array();
		$data['page_title'] = 'Wisk E-Sport | Boutique';
		$data['items'] = $items;

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('store_list', $data); // Appel de la vue avec transmission du tableau  
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');

		$this->form_validation->set_rules('item_id', 'Id', 'required');
		$this->form_validation->set_rules('item_name', 'Name', 'required');

		if ($this->form_validation->run() == FALSE) { // 2ème appel de la page: traitement du formulaire

			$this->load->view('store_create');
		} else {

			$this->load->model('Store_model');

			$data = array();
			$data['name'] = $this->input->post('item_name');
			$data['cat_id'] = $this->input->post('cat_id');
			$data['desc'] = $this->input->post('item_desc');
			$data['img'] = $this->input->post('item_img');
			$data['price'] = $this->input->post('item_price');
			$data['stock'] = $this->input->post('item_stock');

			$this->Store_model->create($data);

			$this->session->set_flashdata('success', 'Records added successfully into the basket!');
			redirect(base_url('Store', $data));
		}
	}

	public function categories() //liste des produits disponibles à la vente
	{
		$this->load->model('Store_model');
		$categories = $this->Store_model->getCategories()->result();

		$data = array();
		$data['categories'] = $categories;

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('categories', $data);
		$this->load->view('templates/footer');
	}

	// 	public function cart()
	// 	{
	// 		if (session_status() !== 2) { // If session hasn't been initied/iterated 
	// 			session_start(); // Then we launch the session
	// 		} else {
	// 			echo 'Session OK ! Initialisation du panier';
	// 		}

	// 		$data = array();
	// 		$data['page_title'] = 'Wisk E-Sport | Panier';
	// 		$data['acc_id'] = $this->session->acc_id; // Under an Object Shape
	// 		$data['item_name'] = $this->session->item_name;
	// 		$data['item_qty'] = $this->session->item_qty;
	// 		$data['item_price'] = $this->session->item_price;

	// 		$this->load->view('templates/header');
	// 		$this->load->view('templates/navbar');
	// 		$this->load->view('store_cart', $data);
	// 		$this->load->view('templates/footer');
	// 	}
}
