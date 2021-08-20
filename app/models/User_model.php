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

  public function getWhereParam($param) {
    $this->db->query('SELECT * FROM ' . $this->table . " WHERE tempel_param=:tempel_param");
    $this->db->bind('tempel_param', $param);
    return $this->db->single();
  }


  public function delete($id) {
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

}