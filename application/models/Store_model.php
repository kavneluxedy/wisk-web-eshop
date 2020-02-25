<?php
class Store_model extends CI_Model
{
   public function __construct()
   {
      $this->load->database();
   }

   function getItems()
   {
      return $this->db->GET('wisk_shop_items');
   }

   function createData()
   {
      $data = array(
         'item_name' => $this->input->post('item_name'),
         'item_desc' => $this->input->post('item_desc'),
         'item_img' => $this->input->post('item_img'),
         'item_price' => $this->input->post('item_price'),
         'item_stock' => $this->input->post('item_stock')
      );
      $this->db->insert('wisk_shop_items', $data);
   }
}
