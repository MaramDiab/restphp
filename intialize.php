<?php

defined('DS')?null:define('DS',DIRECTORY_SEPARATPR);
defined('SITE_ROOT')?NULL:DEFINE('SITE_ROOT',DS.'xampp' .DS .'www'.DS.'phprest');
defined('INC_PATH')?null:define('INC_PATH',SITE_ROOT.DS.'includes');
defined('CORE_PATH')?null:define('CORE_PATH',SITE_ROOT.DS.'core');
require_once(INC_PATH.DS."config.php");
require_once(CORE_PATH.DS."post.php");


?>