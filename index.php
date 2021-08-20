<?php


/**
* -------------------------------------------------------------
* MINI PROJECT PASTEBIN CLONE WITH PHP
* -------------------------------------------------------------
*
*
* @author Muhammad Al Hiqny Bil Abror
* @link https://github.com/Alhiqny404/pastebin
* @version 1.0.0
* Build in 2021 when Mini Digital Competition SKULL CYBER SECURITY
*/


if (!session_id()) session_start();

define('TMP', dirname(__FILE__).DIRECTORY_SEPARATOR.'public/tmp/');

require_once __DIR__.'/app/init.php';

$app = new App;