<?php 

class Flasher {
    public static function setFlash($msg, $tipe)
    {
        $_SESSION['flash'] = [
            'msg' => $msg,
            'tipe'  => $tipe
        ];
    }

    public static function flash()
    {
        if( isset($_SESSION['flash']) ) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
                    </button>
                    '. $_SESSION['flash']['msg'] . '
                  </div>';
            unset($_SESSION['flash']);
        }
    }
}