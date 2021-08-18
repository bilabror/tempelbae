<?php

class Tempel_model {
  private $table = 'tempel';
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function getAllMahasiswa() {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getWhereParam($param) {
    $this->db->query('SELECT * FROM ' . $this->table . " WHERE tempel_param=:tempel_param");
    $this->db->bind('tempel_param', $param);
    return $this->db->single();
  }

  public function add($data, $rand_str) {
    // dd($data);
    $query = "INSERT INTO $this->table
                    VALUES
                  ('', :tempel_title, :tempel_text, :tempel_param, :created_at, :expired_at)";

    $this->db->query($query);
    $this->db->bind('tempel_title', htmlspecialchars($data['tempel_title'], true));
    $this->db->bind('tempel_text', htmlspecialchars($data['tempel_text'], true));
    $this->db->bind('tempel_param', $rand_str);
    $this->db->bind('created_at', sekarang());
    $this->db->bind('expired_at', strtotime(date('Y-m-d H:i:s')) + 604800);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function hapusDataMahasiswa($id) {
    $query = "DELETE FROM mahasiswa WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('id', $id);

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


  public function cariDataMahasiswa() {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }

}