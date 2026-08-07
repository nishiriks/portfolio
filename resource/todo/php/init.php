<?php
require_once 'functions.php';

spl_autoload_register(function($class){
  require_once 'class/' .$class.'.php';

});
 ?>
