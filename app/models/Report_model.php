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

  public function getWhereParam($param) {
    $this->db->query('SELECT * FROM ' . $this->table . " WHERE tempel_param=:tempel_param");
    $this->db->bind('tempel_param', $param);
    return $this->db->single();
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

  public function delete($id) {
    $query = "DELETE FROM tempel WHERE tempel_id = :tempel_id";
    $this->db->query($query);
    $this->db->bind('tempel_id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }


  public function ubahDataMahasiswa($data) {
    $query = "UPDATE mahasiswa SET
                    nama = :nama,
                    nrp = :nrp,
                    email = :email,
                    jurusan = :jurusan
                  WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nrp', $data['nrp']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();

    return $this->db->rowCount();
  }

}