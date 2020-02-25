<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Store extends CI_Controller
{
   public function index() // Accueil de la boutique
   {
      $this->load->model('Store_model');
      $items = $this->Store_model->getItems()->result();

      $data = array();
      $data['page_title'] = 'Wisk E-Sport | Boutique';
      $data['items'] = $items;

      $this->load->view('templates/header');
      $this->load->view('templates/navbar');
      $this->load->view('store_list', $data); // Appel de la vue avec transmission du tableau  
      $this->load->view('templates/footer');
   }

   public function store_list() // Liste des produits disponibles à la vente
   {
      $this->load->model('Store_model');
      $items = $this->Store_model->getItems()->result();

      $data = array();
      $data['page_title'] = 'Wisk | Boutique';
      $data['items'] = $items;

      $this->load->view('store_list', $data); // Appel de la vue avec transmission du tableau  
      // redirect(base_url('Store'));
   }

   public function create()
   {
      if ($this->input->post()) { // 2ème appel de la page: traitement du formulaire
         $data = $this->input->post();
         $this->db->insert("wisk_shop_items", $data);
         redirect(site_url("Store"));
      } else { // 1er appel de la page: affichage du formulaire
         $this->load->view('store_create');
      }
   }

   public function categories() //liste des produits disponibles à la vente
   {
      // Charge la librairie 'database'
      $this->load->database();
   
      // Exécute la requête 
      $results = $this->db->get("wisk_shop_categories");
   
      // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue      
      $data["wisk_shop_categories"] = $results->result();
   
      // Appel de la vue avec transmission du tableau  
      $this->load->view('categories', $data);
   }
}
