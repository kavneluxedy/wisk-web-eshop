<?php
class Store extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Store_model');
		// $this->load->library('session');
		// $this->load->library('basket');
	}

	public function categories() //liste des produits disponibles à la vente
	{
		$categories = $this->Store_model->getCategories()->result();
		$data = array();
		$data['categories'] = $categories;
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('categories', $data);
		$this->load->view('templates/footer');
	}

	public function index() // Accueil de la boutique
	{
		$data = array();
		$data['items'] = $this->Store_model->getItems();
		$data['page_title'] = 'Wisk E-Sport | Boutique';

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');

		$sess_id = $this->session->session_id;
		var_dump($sess_id);

		$this->load->view('store_list', $data); // Appel de la vue avec transmission du tableau  
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->form_validation->set_rules('acc_id', 'Login', 'required');
		$this->form_validation->set_rules('item_name', 'Name', 'required');
		$this->form_validation->set_rules('item_price', 'Price', 'required');
		$this->form_validation->set_rules('item_stock', 'Stock', 'required');
		$this->form_validation->set_rules('item_img', 'Image', 'required');

		if ($this->form_validation->run() == FALSE) { // 2ème appel de la page: traitement du formulaire
			$this->load->view('store_create');
		} else {
			$data = array();
			$data['item_name'] = $this->input->post('item_name');
			$data['cat_id'] = $this->input->post('cat_id');
			$data['item_desc'] = $this->input->post('item_desc');
			$data['item_img'] = $this->input->post('item_img');
			$data['item_price'] = $this->input->post('item_price');
			$data['item_stock'] = $this->input->post('item_stock');

			$this->Store_model->create($data);
			$this->session->set_flashdata('success', 'Records added successfully into the basket !');
			redirect(site_url('Store', $data));
			$this->load->view('templates/footer');
		}
	}

	//////////////////////////
	// Shopping Cart Part  //
	/////////////////////////

	public function createCart()
	{
		$data = array();
		$data['items'] = $this->Store_model->createCart($data);

		$data['page_title'] = 'Wisk E-Sport | Votre Panier';
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('cart_create', $data);
		$this->load->view('templates/footer');
	}

	public function cart()
	{
		$data = array();

		if (session_status() !== 2) // Si la session est désactivée ou n'est pas encore initialisée (session_status == (0 || 1))
		{
			echo '<body>Statut de la session :<br>(1) = SESSION IS ENABLED BUT NONE EXISTS<br>(2) = SESSION (ALREADY) EXISTS</body><br>' . session_status();
			session_start();
		} else // session_status == 2
		{
			$data = array();
			$data['cart'] = $this->Store_model->getShopCart();

			$data['page_title'] = 'Wisk E-Sport | Boutique';
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('cart', $data);
			$this->load->view('templates/footer');

			// var_dump($_SESSION);
			// var_dump($this->session);
		}
	}
}
