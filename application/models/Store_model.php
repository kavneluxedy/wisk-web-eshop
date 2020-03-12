<?php
class Store_model extends CI_Model
{
   public function __construct()
   {
      $this->load->database();
   }

   function create($data)
   {
      $this->db->INSERT('wisk_shop_items', $data);
   }

   function getCategories()
   {
      return $this->db->GET('wisk_shop_categories');
   }

   function getItems()
   {
      return $this->db->GET('wisk_shop_items')->result();
   }

   function initCart($data)
   {
      $acc_id = 0;
      $this->load->model('User_model');
      $this->session->acc_id = $this->User_model->getUser($acc_id); // Stocke l'ID de l'utilisateur actuel dans la session
      var_dump($this->session->acc_id);

      $query = ("SELECT * FROM wisk_account WHERE acc_id = $acc_id");

      $data = array();

      $data['item_name'] = $this->input->post('item_name');
      $data['item_price'] = $this->input->post('item_price');

      $this->basket->ADD($data);
   }
}
