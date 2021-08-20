<?php

/**
* Main Page
**/
class Paste extends Controller {

  // page for paste code
  public function index($param = '') {
    if ($param == '') {
      $data['title'] = 'Create Note';
      $this->_show('paste', $data);
    } else {
      $data['title'] = 'View Code';
      $tempel_data = $this->model('Tempel_model')->getWhereParam($param);
      if ($tempel_data) {
        if ($tempel_data['expired_at'] < sekarang()) {
          $this->model("Tempel_model")->delete($tempel_data['tempel_id']);
        }
        $data['tempel'] = $tempel_data;
        $this->_show('paste-view', $data);
      } else {
        echo 'not found 404';
      }
    }
  }

  // view embed code
  public function embed($param = '') {
    if ($param == '') {
      $data['title'] = 'Create Note';
      $this->_show('paste', $data);
    } else {
      $data['title'] = 'View Code';
      $tempel_data = $this->model('Tempel_model')->getWhereParam($param);
      if ($tempel_data) {
        if ($tempel_data['expired_at'] < sekarang()) {
          $this->model("Tempel_model")->delete($tempel_data['tempel_id']);
        }
        $data['tempel_text'] = $tempel_data['tempel_text'];
        $this->view('embed', $data);
      } else {
        echo 'not found 404';
      }
    }
  }


  // action when user save code
  public function add() {
    if ($_POST['tempel_text'] == '') return redirect('paste');
    $rand_str = rand_str();
    if ($this->model('Tempel_model')->add($_POST, $rand_str) > 0) {
      Flasher::setFlash(
        '<strong>Success!</strong> Not a member of Tempelbin yet? <a href="'.BASEURL.'register">Sign Up</a>, it unlocks many cool features!.',
        'success'
      );
      redirect("paste/{$rand_str}");
    } else {
      Flasher::setFlash(
        '<strong>Gagal!</strong> Mana saya tau:v.',
        'danger'
      );
      redirect('paste');
    }
  }


  // page for raw code
  public function raw($param = '') {
    if ($param == '') return redirect('paste');
    $data['title'] = 'Raw tempel';
    $tempel_data = $this->model('Tempel_model')->getWhereParam($param);
    if ($tempel_data) {
      if ($tempel_data['expired_at'] < sekarang()) {
        $this->model("Tempel_model")->delete($tempel_data['tempel_id']);
      }
      echo "<pre>{$tempel_data['tempel_text']}</pre>";
    } else {
      echo 'not found 404';
    }
  }

  // page for clone code
  public function clonecode($param = '') {
    if ($param == '') return redirect('paste');
    $data['title'] = 'Clone tempel';
    $tempel_data = $this->model('Tempel_model')->getWhereParam($param);
    if ($tempel_data) {
      if ($tempel_data['expired_at'] < sekarang()) {
        $this->model("Tempel_model")->delete($tempel_data['tempel_id']);
      }
      $data['tempel_text'] = $tempel_data['tempel_text'];
      $this->_show('paste', $data);
    } else {
      echo 'not found 404';
    }

  }


  // action download code
  public function download($param = '') {
    if ($param == '') return redirect('paste');
    $data['title'] = 'Download Code tempel';
    $tempel_data = $this->model('Tempel_model')->getWhereParam($param);

    // Jika parameter ada didatabase
    if ($tempel_data) {
      if ($tempel_data['expired_at'] < sekarang()) {
        $this->model("Tempel_model")->delete($tempel_data['tempel_id']);
      }
      $ext = $tempel_data['tempel_type'];
      $filename = "{$param}-tempelbin{$ext}";
      $text = htmlspecialchars_decode($tempel_data['tempel_text'], true);
      $path = TMP.$filename;

      // create and write file
      $myfile = fopen($path, "w") or die("Unable to open file!");
      fwrite($myfile, $text);
      fclose($myfile);

      if (file_exists($path)) {

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: 0');
        header('Content-Disposition: attachment; filename="'.basename($path).'"');
        header('Content-Length: '. filesize($path));
        header('pragma: public');

        flush();

        readfile($path);
        unlink($path);
        die();

      } else {
        echo "File tidak ada";
      }

    }

  }


  // page for report code
  public function report($param = '') {
    if ($param == '') return redirect('paste');

    if (isset($_POST['submit'])) {
      if ($this->model('Report_model')->add($_POST) > 0) {
        Flasher::setFlash(
          '<strong>SUCCESS!</strong> report sent successfully',
          'success'
        );
        redirect("paste/report/{$param}");
      } else {
        Flasher::setFlash(
          '<strong>Gagal!</strong> Mana saya tau:v.',
          'danger'
        );
        redirect('paste');
      }
      exit();
    }



    $data['title'] = 'Report Abuse Tempel Code';
    $tempel_data = $this->model('Tempel_model')->getWhereParam($param);
    if ($tempel_data) {
      if ($tempel_data['expired_at'] < sekarang()) {
        $this->model("Tempel_model")->delete($tempel_data['tempel_id']);
      }
      $data['tempel'] = $tempel_data;
      $this->_show('tempel-report', $data);
    } else {
      echo 'not found 404';
    }

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