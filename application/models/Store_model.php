<?php
class Store_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	// Store Part
	function getCategories()
	{
		return $this->db->GET('wisk_shop_categories'); // Categories
	}

	function create($data)
	{
		$this->db->INSERT('wisk_shop_items', $data); // Create an item into the database (items)
	}

	function getItems()
	{
		return $this->db->GET('wisk_shop_items')->result();
	}

	// Shopping Part
	function createCart($data)
	{
		$data = array(
			/* Columns Name : */
			'order_id' => $this->input->post('order_id'),
			'acc_id' => $this->input->post('acc_id'),
			'cat_id' => $this->input->post('cat_id'),
			'item_id' => $this->input->post('item_id'),
			'item_name ' => $this->input->post('item_name'),
			'item_img' => $this->input->post('item_img'),
			'item_price' => $this->input->post('item_price'),
			'order_qty' => $this->input->post('order_qty'),
			'stock_available' => $this->input->post('stock_available')
		);
		$this->db->INSERT($data); // INSERT data in the specified columns into database(carts)
	}

	function getShopCart()
	{
		return $this->db->GET('wisk_shop_cart')->result();
	}

	function deleteCart($order_id)
	{
		$this->db->DELETE('wisk_shop_cart', $order_id);
	}
}
