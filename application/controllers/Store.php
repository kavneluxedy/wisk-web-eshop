 <?php
   class Store extends CI_Controller
   {
      public function __construct()
      {
         parent::__construct();
         $this->load->model('Store_model');
      }

      public function index() // Accueil de la boutique
      {
         // $this->load->model('Store_model');
         $items = $this->Store_model->getItems();
         $data = array();
         $data = [
            'page_title'      => 'Wisk E-Sport | Boutique',
            'items'           => $this->Store_model->getItems()
         ];
         $this->load->view('templates/header');
         $this->load->view('templates/navbar');
         $this->load->view('store_list', $data); // Appel de la vue avec transmission du tableau  
         $this->load->view('templates/footer');
      }

      public function create()
      {
         $this->load->view('templates/header');
         $this->load->view('templates/navbar');

         $this->form_validation->set_rules('item_name', 'Item Name', 'required');
         // $this->form_validation->set_rules('cat_id', 'Categorie Id', 'required');
         // $this->form_validation->set_rules('cat_name', 'Categorie Name', 'required');
         // $this->form_validation->set_rules('item_img', 'Image', 'required');
         // $this->form_validation->set_rules('item_price', 'Price', 'required');
         // $this->form_validation->set_rules('item_stock', 'Name');

         if ($this->form_validation->run() == FALSE) { // 2ème appel de la page: traitement du formulaire

            $this->load->view('store_create');
         } else {

            // $this->load->model('Store_model');

            $data = array();
            $data = [
               'item_name'           => $this->input->post('item_name'),
               'cat_id'              => $this->input->post('cat_id'),
               'item_img'            => $this->input->post('item_img'),
               'item_price'          => $this->input->post('item_price'),
               'item_stock'          => $this->input->post('item_stock')
            ];
            $this->Store_model->create($data);
            $this->session->set_flashdata('success', 'Records added successfully into the Store !');
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

      public function gallery()
      {
         $this->load->view('templates/header');
         $this->load->view('templates/navbar');
         $this->load->view('templates/gallery');
         $this->load->view('templates/footer');
      }

      public function item()
      {
         $this->load->view('templates/header');
         $this->load->view('templates/navbar');

         $data = array();
         $data = [
            'page_title'       => 'Items Administration',
            'items'            => $this->Store_model->getItems()
         ];

         $this->load->view('store/item', $data);
         $this->load->view('templates/footer');
      }

      public function delete($item_id)
      {
         $item = $this->Store_model->getItem($item_id);
         if (empty($item)) {
            $this->session->set_flashdata('failure', 'Record not found in Database !');
            redirect(base_url('Store'));
         } else {
            $this->Store_model->delete($item_id);
            $this->session->set_flashdata('success', 'Record deleted successfully !');
            redirect(base_url('Store'));
         }
      }

      public function edit($item_id)
      {
         // $this->load->model('User_model');
         $this->load->view('templates/header');
         $this->load->view('templates/navbar');

         $item = $this->Store_model->getItem($item_id);

         $data = array();
         $data['item'] = $item;

         // $_POST = array();
         // $_POST = [
         //    'cat_id' => $this->input->post('cat_id'),
         //    'item_name' => $this->input->post('item_name'),
         //    'item_desc' => $this->input->post('item_desc'),
         //    'item_img' => $this->input->post('item_img'),
         //    'item_price' => $this->input->post('item_price'),
         //    'item_stock' => $this->input->post('item_stock'),
         // ];

         $this->form_validation->set_rules('item_name', 'Item Name', 'required|max_length[50]');

         if ($this->form_validation->run() === FALSE) {
            $this->load->view('store/edit', $data);
         } else // Update user records
         {
            $data = [
               'cat_id' => $this->input->post('cat_id'),
               'item_name' => $this->input->post('item_name'),
               'item_desc' => $this->input->post('item_desc'),
               'item_img' => $this->input->post('item_img'),
               'item_price' => $this->input->post('item_price'),
               'item_stock' => $this->input->post('item_stock')
            ];
            $this->User_model->edit($item_id, $data);
            $this->session->set_flashdata('success', 'Record updated successfully !');
            redirect(base_url('Store'));
         }
         $this->load->view('templates/footer');
      }
   }
