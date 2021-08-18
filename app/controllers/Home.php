<?php


class Home extends Controller {

  public function index($param = '') {
    return redirect('paste');
  }


}