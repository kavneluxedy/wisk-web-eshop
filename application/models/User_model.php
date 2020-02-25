<?php
class User_model extends CI_Model
{
   public function __construct()
   {
      $this->load->database(); // Dès qu'une classe est appelée, sa fonction __construct est executé.
   }

   public function create($formArray)
   {
      $this->db->insert('wisk_account', $formArray); // INSERT INTO wisk_account (acc_username, acc_email) VALUES (? , ?);
      // $this->db->query("INSERT INTO wisk_account VALUES ('?', 'username', 'pass', 'email', 'secret_id')");
   }

   public function getAll()
   {
      return $this->db->GET('wisk_account')->result_array(); // Retourne un tableau contenant TOUS (*) les utilisateurs présent dans la table wisk_account.
   }
   
   public function getUser($acc_id)
   {
      $this->db->WHERE('acc_id', $acc_id); // SELECT acc_id FROM wisk_account WHERE ACC_ID = $acc_id;
      return $user = $this->db->GET('wisk_account')->row_array(); // Retourne un tableau contenant TOUTES les informations d'UN enregistrement dans la table wisk_account.
   }

   public function updateUser($acc_id, $formArray)
   {
      $this->load->db->WHERE('acc_id', $acc_id); // WHERE acc_id = $acc_id 
      $this->load->db->UPDATE('wisk_account', $formArray); // Remplace dans la table wisk_account l'enregistrement identifié par $acc_id 
      // UPDATE wisk_account SET acc_username = $name, acc_email = $email
   }

   public function delete($acc_id)
   {
      $this->db->where('acc_id', $acc_id);
      $this->db->delete('wisk_account');
   }
}