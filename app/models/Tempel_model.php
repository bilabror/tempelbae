<?php

class Tempel_model {
  private $table = 'tempel';
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function getAll() {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getWhereParam($param) {
    $this->db->query('SELECT * FROM ' . $this->table . " WHERE tempel_param=:tempel_param");
    $this->db->bind('tempel_param', $param);
    return $this->db->single();
  }

  public function add($data, $rand_str) {
    $expired_at = strtotime(sekarang()) + (86400 * $data['expired_at']);
    $query = "INSERT INTO $this->table
                    VALUES
                  ('', :tempel_title, :tempel_text, :tempel_type, :tempel_param, :user_id, :created_at, :expired_at)";
    if ($data['tempel_type'] == '.') {
      $tempel_type = '.txt';
    } else {
      $tempel_type = $data['tempel_type'];
    }
    $this->db->query($query);
    $this->db->bind('tempel_title', htmlspecialchars($data['tempel_title'], true));
    $this->db->bind('tempel_text', htmlspecialchars($data['tempel_text'], true));
    $this->db->bind('tempel_type', $tempel_type);
    $this->db->bind('tempel_param', $rand_str);
    $this->db->bind('user_id', 0);
    $this->db->bind('created_at', sekarang());
    $this->db->bind('expired_at', date('Y-m-d H:i:s', $expired_at));
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function delete($id) {
    $query = "DELETE FROM tempel WHERE tempel_id = :tempel_id";
    $this->db->query($query);
    $this->db->bind('tempel_id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }

}