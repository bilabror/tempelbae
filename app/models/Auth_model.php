<?php

class Auth_model {
  private $table = 'user';
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function login($data = []) {
    $this->db->query('SELECT * FROM ' . $this->table . " WHERE user_email=:user_email");
    $this->db->bind('user_email', $data['user_email']);
    $user = $this->db->single();
    if (!$user) return FALSE;
    if (!password_verify($data['user_password'], $user['user_password'])) return FALSE;
    $_SESSION['user_id'] = $user['user_id'];
    $_SESSION['fullname'] = $user['user_name'];
    $_SESSION['level'] = $user['user_level'];
    if ($user['user_level'] == 'admin') return redirect('admin/dashboard');
    exit();
  }

  public function getWhereParam($param) {
    $this->db->query('SELECT * FROM ' . $this->table . " WHERE tempel_param=:tempel_param");
    $this->db->bind('tempel_param', $param);
    return $this->db->single();
  }

  public function add($data, $rand_str) {
    $expired_at = strtotime(sekarang()) + 604800;
    $query = "INSERT INTO $this->table
                    VALUES
                  ('', :tempel_title, :tempel_text, :tempel_type, :tempel_param, :created_at, :expired_at)";

    $this->db->query($query);
    $this->db->bind('tempel_title', htmlspecialchars($data['tempel_title'], true));
    $this->db->bind('tempel_text', htmlspecialchars($data['tempel_text'], true));
    //  $this->db->bind('tempel_type', htmlspecialchars($data['tempel_type'], true));
    $this->db->bind('tempel_type', '.txt');
    $this->db->bind('tempel_param', $rand_str);
    $this->db->bind('created_at', sekarang());
    $this->db->bind('expired_at', date('Y-m-d H:i:s', $expired_at));

    $this->db->execute();

    return $this->db->rowCount();
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