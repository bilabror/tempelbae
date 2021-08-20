<?php

class User_model {
  private $table = 'user';
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function add() {
    $password = PASSWORD_HASH('admin', PASSWORD_BCRYPT);

    $query = "INSERT INTO user
                    VALUES
                  ('', :user_name, :user_email, :user_password, :user_level)";

    $this->db->query($query);
    $this->db->bind('user_name', 'bil abror');
    $this->db->bind('user_email', 'admin@example.com');
    $this->db->bind('user_password', $password);
    $this->db->bind('user_level', 1);

    $this->db->execute();

    return $this->db->rowCount();
  }

}