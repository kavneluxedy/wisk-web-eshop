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

   function caddy($data)
   {
      $this->load->model('User_model');

      $data = array();
      $data['acc_id'] = $this->User_model->getUser($acc_id);
      $data['item_name'] = $this->input->post('item_name');
      $data['item_price'] = $this->input->post('item_price');

      $this->basket->ADD($data);
   }
}
