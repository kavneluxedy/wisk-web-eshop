<?php
class User_model extends CI_Model
{
   public function __construct()
   {
      $this->load->database(); // Dès qu'une classe est appelée, sa fonction __construct est executé.
   }

   public function create($data)
   {
      $this->db->INSERT('wisk_account', $data); // INSERT INTO wisk_account (acc_username, acc_email) VALUES (? , ?);
      // $this->db->close();
   }

   public function getUsers()
   {
      return $this->db->GET('wisk_account')->result_array(); // Retourne un tableau contenant TOUTES (*) les entrées présentes dans la table wisk_account.
   }

   public function getUser($acc_id)
   {
      $this->db->WHERE('acc_id', $acc_id); // SELECT acc_id FROM wisk_account WHERE ACC_ID = $acc_id;
      return $user = $this->db->GET('wisk_account')->row(1); // Retourne un tableau contenant TOUTES les informations d'UN enregistrement($acc_id) dans la table wisk_account.
   }

   public function getID($acc_username, $acc_email)
   {
      $query = $this->db->query('SELECT wisk_account.acc_id, wisk_account.acc_username FROM wisk_account WHERE acc_username LIKE "root" AND acc_email LIKE "root@%.%";');

      if ($query->num_rows() == TRUE) {
         return 'True';
      } else {
         return 'false';
      }
      redirect(base_url('User/edit_customer/176', $query));
   }

   public function updateUser($acc_id, $formArray)
   {
      $this->load->db->WHERE('acc_id', $acc_id); // WHERE acc_id = $acc_id
      $this->load->db->UPDATE('wisk_account', $formArray); // Remplace dans la table wisk_account l'enregistrement identifié par $acc_id
      // UPDATE wisk_account SET acc_username = $username, acc_email = $email
      $this->db->close();
   }

   public function delete($acc_id)
   {
      $this->db->where('acc_id', $acc_id);
      $this->db->delete('wisk_account');

      $this->db->close();
   }

   public function can_login($username, $password)
   {
      $this->db->WHERE('acc_username', $username); // SELECT acc_username, acc_pass FROM wisk_account
      $this->db->WHERE('acc_pass', $password); // WHERE acc_username = $username AND acc_pass = $password;
      $query = $this->db->GET('wisk_account');

      $user = $query->row();

      $this->session->set_flashdata('Success', 'Logged In');

      if ($query->num_rows() > 0) {
         return TRUE;
      } else {
         return FALSE;
      }

      $this->db->close();
   }
}
