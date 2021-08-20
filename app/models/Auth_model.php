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


}