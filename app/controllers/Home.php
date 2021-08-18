<?php


class Home extends Controller {

  public function index($param = '') {
    if ($param == '') {
      $data['judul'] = 'Home';
      $this->view('index');
    } else {
      echo $param;
    }
  }

  public function raw($param) {
    $data['judul'] = 'Raw tempel';
    $tempel_data = $this->model('Tempel_model')->getWhereParam($param);
    if (count($tempel_data) > 0) {
      echo $tempel_data['tempel_text'];
    } else {
      echo 'not found 404';
    }
  }


}