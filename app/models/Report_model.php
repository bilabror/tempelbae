<?php

class Report_model {
  private $table = 'report';
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function getAll() {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function add($data) {
    $query = "INSERT INTO $this->table
                    VALUES
                  ('', :report_name, :report_email, :report_message, :tempel_param, :created_at)";
    $this->db->query($query);
    $this->db->bind('report_name', htmlspecialchars($data['report_name'], true));
    $this->db->bind('report_email', htmlspecialchars($data['report_email'], true));
    $this->db->bind('report_message', htmlspecialchars($data['report_message'], true));
    $this->db->bind('tempel_param', htmlspecialchars($data['tempel_param'], true));
    $this->db->bind('created_at', sekarang());
    $this->db->execute();
    return $this->db->rowCount();
  }
  
}