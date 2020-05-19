<?php

/**
 * Basket manager in session for CodeIgniter 3.x
 * 
 * An element in the basket must be an array.
 * 
 * Must set $config['basket'] in config.php
 * This has to contain:
 *          - 'id_key'      :   for key to identify an element in the basket
 * 
 * Example:
 * $config['basket'] = [
 *      'id_key' => 'a_key'
 * ];
 * 
 * 
 * TODO: API description
 * 
 * Technical:
 *      Basket session format:
 *      [
 *           [
 *               Basket::ELEMENT => array,
 *               Basket::QTY     => int
 *           ],
 *           [
 *               Basket::ELEMENT => array,
 *               Basket::QTY     => int
 *           ]
 *           ...
 *      ]
 * 
 * PHP version 7.0
 *
 * @category    Basket
 * @version     0.5
 * @author      Grégory Jaouën <gregory.jaouen@tutanota.com>
 * @license     http://opensource.org/licenses/BSD-3-Clause 3-clause BSD
 * @link        https://github.com/gregjaouen/codeigniter_librairies
 */

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Basket
{

    protected const ELEMENT = 'element';
    protected const QTY = 'qty';
    protected const BASKET = 'basket';

    protected const CONFIG_ID_KEY = 'id_key';

    protected $auth_config;

    public function __construct()
    {
        $this->load_config(Basket::BASKET, [Basket::CONFIG_ID_KEY]);
        $this->load->library('session');
        $this->set_session();
    }


    /**
     * Add an element to the basket. If element already exists, add the given quantity to the basket quantity. Returns true if the element is correctly added.
     * 
     * @param array     $element    The element to add to the basket
     * @param int       $quantity   The quantity of element to add
     * 
     * @return bool
     * 
     * @uses get_element_index
     * @uses get_basket
     * @uses unsafe_set_quantity
     * @uses basket_push
     */
    public function add(array $element, int $quantity = 1): bool
    {
        $quantity = ($quantity > 0) ? $quantity : $quantity = 1;

        $element_index = $this->get_element_index($element);
        if ($element_index !== null) { // if element already exists
            $newQty = $quantity + $this->get_basket()[$element_index][Basket::QTY];
            return $this->unsafe_set_quantity($element_index, $newQty);
        } else {
            return $this->basket_push($element, $quantity);
        }
    }


    /**
     * Substract an element to the basket. If element has his quantity equals to 0 or less, then remove it. Returns true if the element is correctly edited or removed
     * 
     * @param array     $element    The element to add to the basket
     * @param int       $quantity   The quantity of element to add
     * 
     * @return bool
     * 
     * @uses get_element_index
     * @uses get_basket
     * @uses unsafe_add_quantity
     * @uses basket_delete
     */
    public function substract(array $element, int $quantity = 1): bool
    {
        $quantity = ($quantity > 0) ? $quantity : $quantity = 1;

        $element_index = $this->get_element_index($element);
        if ($element_index !== null) {
            $newQty = $this->get_basket()[$element_index][Basket::QTY] - $quantity;
            if ($newQty > 0) {
                return $this->unsafe_set_quantity($element_index, $newQty);
            } else {
                return $this->basket_delete($element_index);
            }
        }
        return false;
    }


    /**
     * Remove the given element from the basket. Returns true if the element is correctly removed.
     * 
     * @param array     $element    The element to remove from the basket
     * 
     * @return bool
     * 
     * @uses get_element_index
     * @uses basket_delete
     */
    public function remove(array $element): bool
    {
        $element_index = $this->get_element_index($element);
        if ($element_index !== null) {
            return $this->basket_delete($element_index);
        }
        return false;
    }


    /**
     * Edit the quantity of given element from the basket. If quantity <= 0, remove the element. Returns true if the element is correctly edited or removed.
     * 
     * @param array     $element    The element to edit from the basket
     * @param int       $quantity   The new quantity of element
     * 
     * @return bool
     * 
     * @uses get_element_index
     * @uses unsafe_set_quantity
     * @uses remove
     */
    public function edit_quantity(array $element, int $quantity): bool
    {
        if ($quantity > 0) {
            $element_index = $this->get_element_index($element);
            if ($element_index !== null) {
                return $this->unsafe_set_quantity($element_index, $quantity);
            }
        } else {
            return $this->remove($element);
        }
        return false;
    }


    /**
     * Flush the basket from session.
     * 
     * @return void
     */
    public function clean(): void
    {
        $this->session->unset_userdata(Basket::BASKET);
    }


    /**
     * Return the basket array from the session.
     * 
     * @return array
     * 
     * @uses set_session
     */
    public function get_basket(): array
    {
        $this->set_session();
        return $this->session->userdata(Basket::BASKET);
    }


    /**
     * Return the sum of price, with given field name. If nothing found, return 0.0.
     * 
     * @param string    $price_field_name    The price field name in the basket
     * 
     * @return float
     * 
     * @uses get_basket
     */
    public function get_price_sum(string $price_field_name): float
    {
        $out = 0.0;
        foreach ($this->get_basket() as $_index => $content) {
            if (isset($content[Basket::ELEMENT][$price_field_name])) {
                $out += (float) $content[Basket::ELEMENT][$price_field_name] * $content[Basket::QTY];
            }
        }
        return $out;
    }


    /**
     * Return the sum of element's quantity
     * 
     * @return int
     * 
     * @uses get_basket
     */
    public function get_quantity_sum(): ?int
    {
        $out = 0;
        foreach ($this->get_basket() as $_index => $content) {
            $out += $content[Basket::QTY];
        }
        return $out;
    }


    /**
     * Return the sum of element
     * 
     * @return int
     * 
     * @uses get_basket
     */
    public function get_element_sum(): ?int
    {
        return sizeof($this->get_basket());
    }


    /**
     * Return true if the given element is the basket.
     * 
     * @param array     $element    The element to check presence from the basket
     * 
     * @return bool
     * 
     * @uses get_element_index
     */
    public function is_in_basket(array $element): bool
    {
        return ($this->get_element_index($element) == null) ? false : true;
    }


    /**
     * Return the index of given element from the basket. If nothing found, return null.
     * 
     * @param array     $element    The element to get index from the basket
     * 
     * @return int|null
     * 
     * @uses get_basket
     * @uses elements_have_same_id_key
     */
    public function get_element_index(array $element): ?int
    {
        foreach ($this->get_basket() as $index => $content) {
            if ($this->elements_have_same_id_key($content[Basket::ELEMENT], $element)) {
                return $index;
            }
        }
        return null;
    }


    /**
     * Get id_key
     *
     * @return string|null
     */
    public function get_id_key(): string
    {
        return $this->auth_config[Basket::CONFIG_ID_KEY];
    }


    /**
     * Set the given array as the new basket in session
     * 
     * @param array     $updated_basket    The basket to be setted
     * 
     * @return void
     */
    protected function update_basket_array(array $updated_basket): void
    {
        $this->session->set_userdata(Basket::BASKET, $updated_basket);
    }


    /**
     * Check if given arrays are equals
     * 
     * @param array     $a    The first array to test
     * @param array     $b    The second array to test
     * 
     * @return bool
     * 
     * @uses get_id_key
     */
    protected function elements_have_same_id_key(array $a, array $b): bool
    {
        $id_key = $this->get_id_key();
        if (isset($a[$id_key]) && isset($b[$id_key])) {
            return ($a[$id_key] === $b[$id_key]);
        }
        return false;
    }


    /**
     * If no basket is founded in session, create a new one
     * 
     * @return void
     * 
     * @uses update_basket_array
     */
    protected function set_session(): void
    {
        if ($this->session->userdata(Basket::BASKET) == null || !is_array($this->session->userdata(Basket::BASKET))) {
            $this->update_basket_array(array());
        }
    }


    /**
     * TODO: identify and handle exception
     * Push the given element and quantity to the basket in session. If encountered error, return false.
     * 
     * @param array     $element    The element to be pushed
     * @param int       $quantity   The quantity to be pushed
     * 
     * @return bool
     * 
     * @uses get_basket
     * @uses update_basket_array
     */
    protected function basket_push(array $element, int $quantity): bool
    {
        try {
            if (!is_array($element)) {
                $element = array($element);
            }
            $basket = $this->get_basket();
            array_push($basket, [
                Basket::ELEMENT => $element,
                Basket::QTY => $quantity
            ]);
            $this->update_basket_array($basket);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }


    /**
     * TODO: identify and handle exception
     * Delete the element with given element index.
     * 
     * @param int     $element_index    The index of the element to be deleted
     * 
     * @return bool
     * 
     * @uses get_basket
     * @uses update_basket_array
     */
    protected function basket_delete(int $element_index): bool
    {
        try {
            $basket = $this->get_basket();
            array_splice($basket, $element_index, 1);
            $this->update_basket_array($basket);
            return true;
        } catch (Exception $e) {
            return true;
        }
    }


    /**
     * TODO: identify and handle exception
     * Set the quantity for indexed element.
     * 
     * @param int     $index    The index of the element to be edited
     * @param int     $qty      The quantity to edit
     * 
     * @return bool
     * 
     * @uses get_basket
     * @uses update_basket_array
     */
    protected function unsafe_set_quantity(int $index, int $qty): bool
    {
        try {
            $basket = $this->get_basket();
            $basket[$index][Basket::QTY] = $qty;
            $this->update_basket_array($basket);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }


    /**
     * Check if config.php is correctly setted
     * 
     * @param string    $item_name          The name of config container
     * @param string    $keys_to_check      List of needed keys 
     * 
     * @return void
     * @throws UnexpectedValueException $config[needed] is missing
     */
    protected function load_config(string $item_name, array $keys_to_check): void
    {
        if ($this->config->item($item_name) && !empty($this->config->item($item_name))) {
            $auth_config = $this->config->item($item_name);
            foreach ($keys_to_check as $key) {
                if (!isset($auth_config[$key]) || $auth_config[$key] == null) {
                    throw new UnexpectedValueException(sprintf("\$config[%s][%s] is not setted <br>", $item_name, $key));
                }
            }
            $this->auth_config = $auth_config;
        } else {
            throw new UnexpectedValueException(sprintf("\$config[%s] is not setted <br>", $item_name));
        }
    }


    /**
     * Magic method to access session and load
     */
    public function __get($value)
    {
        if ($value === "session" || $value === "load" || $value === "config") {
            return get_instance()->$value;
        }
    }
}
