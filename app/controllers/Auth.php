<?php


/**
* Controller untuk Login dan logout
**/
class Auth extends Controller {

// Login page
  public function login() {
    if (isset($_SESSION['user_id'])) return redirect('');
    if (isset($_POST['submit'])) {
      $login = $this->model('Auth_model')->login($_POST);
      if ($login == FALSE) {
        Flasher::setFlash(
          'Failed! wrong email or password.',
          'danger'
        );
        redirect('auth/login');
      }
    }

    $data['title'] = 'Login Page - Tempelbin';
    $this->view('login', $data);

  }

// Action logout user
  public function logout() {
    session_destroy();
    redirect('auth/login');

  }

}