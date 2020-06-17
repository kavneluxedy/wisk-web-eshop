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
      $items = $this->db->GET('wisk_shop_items')->result();
      return $items;
   }

   function getItem($item_id)
   {
      $this->db->WHERE('item_id', $item_id);
      $item = $this->db->GET('wisk_shop_items')->result();
   }

   function delete($item_id)
   {
      $this->db->WHERE('item_id', $item_id);
      $this->db->DELETE('wisk_shop_items');
   }

   function edit($item_id, $data)
   {
      $this->db->WHERE('item_id', $item_id);
      $this->db->UPDATE('wisk_shop_items', $data);
   }
}
