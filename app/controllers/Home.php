<?php

/**
* First Page when open website in browser
**/
class Home extends Controller {

  public function index() {
    $data['title'] = 'Home Page - Tempelbin';
    $this->view('home', $data);
  }

}