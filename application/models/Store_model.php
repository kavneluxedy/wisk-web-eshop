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

   function getCategorie()
   {
      $query = $this->db->query('SELECT wisk_shop_categories.cat_name FROM wisk_shop_categories JOIN wisk_shop_items ON wisk_shop_categories.cat_name = wisk_shop_items.cat_name');
      return $query;
   }

   function getItems()
   {
      return $this->db->GET('wisk_shop_items')->result();
   }

   function deleteItems($item_id)
   {
   }

   function caddy($acc_id)
   {
      $this->load->model('User_model');

      $data = array();
      $data['acc_id'] = $this->User_model->getUser($acc_id);
      $data['item_name'] = $this->input->post('item_name');
      $data['item_price'] = $this->input->post('item_price');
   }

   // function basket()
   // {
   //    $data = array(
   //       "item_id" => $this->input->post('item_id'),
   //       "item_name" => $this->input->post('item_name'),
   //       "item_price" => $this->input->post('item_price')
   //    );
   //    $this->basket->ADD($data);
   // }
}
