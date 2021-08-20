<?php

/**
* Controller untuk User Level Admin
**/
class Admin extends Controller {

  public function __construct() {
    if (!$_SESSION['user_id']) return redirect('auth/login');
  }

// Dashboard Page
  public function index() {
    $data['title'] = 'Dashboard Admin Page';
    $data['tempel'] = $this->model('Tempel_model')->getAll();
    $this->_show('admin/dashboard', $data);
  }

// Management tempel code
  public function tempelcode() {
    $data['title'] = 'List Tempel Code Page';
    $data['tempel'] = $this->model('Tempel_model')->getAll();
    $this->_show('admin/tempel-code', $data);
  }

  //Action delete tempel code
  public function deletetempel($param = '') {
    if ($param == '') return redirect('paste');
    $data['title'] = 'Delete tempel';
    $tempel_data = $this->model('Tempel_model')->getWhereParam($param);
    if ($tempel_data) {

      if ($this->model("Tempel_model")->delete($tempel_data['tempel_id']) > 0) {
        Flasher::setFlash(
          '<strong>SUCCESS!</strong> successfully deleted',
          'success'
        );
        redirect("admin/tempelcode");
      } else {
        Flasher::setFlash(
          '<strong>Gagal!</strong> Mana saya tau:v.',
          'danger'
        );
        redirect('admin/tempelcode');
      }

    } else {
      echo 'not found 404';
    }
  }


// Management Report code
  public function reportcode() {
    $data['title'] = 'List Report Code Page';
    $data['report'] = $this->model('Report_model')->getAll();
    $this->_show('admin/report-code', $data);
  }



  // simple templating
  private function _show($page = '', $data = []) {
    $this->view('_layouts/header', $data);
    $this->view('_layouts/topbar', $data);
    $this->view('_layouts/wrapper-img', $data);
    $this->view('_layouts/sidebar', $data);
    $this->view($page, $data);
    $this->view('_layouts/footer', $data);
  }


}