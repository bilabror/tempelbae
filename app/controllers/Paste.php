<?php


class Paste extends Controller {


  public function index($param = '') {
    if ($param == '') {
      $data['judul'] = 'Home';
      $this->view('index');
    } else {
      $data['judul'] = 'Paste';
      $tempel_data = $this->model('Tempel_model')->getWhereParam($param);
      if ($tempel_data) {
        $data['tempel'] = $tempel_data;
        $this->view('paste', $data);
      } else {
        echo 'not found 404';
      }
    }
  }

  public function add() {
    $rand_str = rand_str();
    if ($this->model('Tempel_model')->add($_POST, $rand_str) > 0) {
      Flasher::setFlash('<strong>Berhasil!</strong> silahkan <a>buat akun</a> agar dapat mengedit dan menghapus postingan.',
        'success');
      $url = "paste/{$rand_str}";
      redirect($url);
    } else {
      echo 'gagal';
      Flasher::setFlash('<strong>Gagal!</strong> Mana saya tau:v.',
        'danger');
       redirect('paste');
    }
  }

  public function raw($param) {
    $data['judul'] = 'Raw tempel';
    $tempel_data = $this->model('Tempel_model')->getWhereParam($param);
    if ($tempel_data) {
      echo "<pre>{$tempel_data['tempel_text']}</pre>";
    } else {
      echo 'not found 404';
    }
  }


}