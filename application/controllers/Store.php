<?php
class Store extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Store_model');
<<<<<<< HEAD
=======
      // $this->load->library('session');
>>>>>>> 76f930e233c3c7acf37b553eea2cbfa0a6110200
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
<<<<<<< HEAD
=======
   }

   public function caddy()
   {
      $this->load->model('Store_model');
      $this->session->destroy();

      if (session_status() == 2) // Si la session a été initiée
      {
         echo '<body>Statut de la session :<br>(1) = SESSION IS ACTIVE BUT DO NOT EXISTS<br>(2) = SESSION (ALREADY) EXISTS</body><br>'.session_status();
      } else // session_status == (0 || 1) (A session is active)
      {
         echo 'Impossible the answer like as 0 because session_status(0) = SESSION ARE DISABLED<br>';
      }

      $this->load->view('templates/footer');

      $this->session->userdata('item_name');
      $this->session->userdata('item_qty');
      $this->session->userdata('item_price');

      $data = array();
      $data['page_title'] = 'Wisk E-Sport | Panier';

      $this->load->view('templates/header');
      $this->load->view('templates/navbar');
      $this->load->view('store_caddy', $data);
      $this->load->view('templates/footer');
>>>>>>> 76f930e233c3c7acf37b553eea2cbfa0a6110200
   }

   // public function basket()
   // {
   //    $this->load->model('Store_model');

   //    $data = array();
   //    $items = $this->Store_model->getItems();
   //    $data['page_title'] = 'Wisk E-Sport | Panier';
   //    $data['items'] = $items;

   //    $this->load->view('templates/header');
   //    $this->load->view('templates/navbar');
   //    $this->load->view('store_basket', $data);
   //    $this->load->view('templates/footer');
   // }
}
