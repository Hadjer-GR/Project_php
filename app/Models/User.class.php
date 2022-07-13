<?php
require_once "../app/libraries/Database.class.php";
class User
{
   // conecte la base de donne 

   private $db;
   // query 

   private $insert_user_sql = "INSERT INTO `users` ( `nom`, `prenom`, `contact`, `password`, `date`, `gener`) VALUES ( ?, ?, ?,?, ?,?);";
   private $get_id_user = "SELECT id FROM `users` WHERE contact=? and password=?;
   ";

   public function __construct()
   {
      $this->db = new Database();
   }

   // inscrir
   public function insert_user($nom, $prenom, $contact, $pass, $date, $gener)
   {
      $this->db->preparedstmt($this->insert_user_sql);
      $this->db->bind_Value(1, $nom, null);
      $this->db->bind_Value(2, $prenom, null);
      $this->db->bind_Value(3, $contact, null);
      $this->db->bind_Value(4, $pass, null);
      $this->db->bind_Value(5, $date, null);
      $this->db->bind_Value(6, $gener, null);
      $this->db->executeQuery();
      $this->db->endconnect();
   }


   // autentication
   public function login($contact, $pass)
   {
      $this->db->preparedstmt($this->get_id_user);
      $this->db->bind_Value(1, $contact, null);
      $this->db->bind_Value(2, $pass, null);
      $this->db->executeQuery();

      $user_id = $this->db->fetch();

      if (isset($user_id->id)) {
         return $user_id->id;
      } else {
         return 0;
      }
   }
}
