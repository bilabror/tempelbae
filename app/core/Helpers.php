<?php

function dd($data = []) {
  echo '<pre>';
  print_r($data);
  echo '</pre>';
  die;
}


function rand_str($length = 10) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}

function pre($text = '') {
  echo '<pre>';
  echo $text;
  echo '</pre>';
}

function sekarang() {
  return date('Y-m-d H:i:s');
}


function redirect($to) {
  $ke = BASEURL.$to;
  header("location:$ke", TRUE, 301);
  exit;
}