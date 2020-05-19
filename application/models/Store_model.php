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
