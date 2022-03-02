<?php

require_once('autoload.php');
require_once('config/parameters.php');
require_once('views/layouts/header.php');

if(isset($_GET['controller'])){
  $nombre_controlador = $_GET['controller'].'Controller';
}else if(!isset($GET_['controller']) && !isset($GET_['action'])){
  $nombre_controlador = controller_default;
}
else{
  echo 'La página no existe';
  exit();
}

if(class_exists($nombre_controlador)){
  $controlador = new $nombre_controlador();
  if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
    $action = $_GET['action'];
    $controlador->$action();
  }else if(!isset($GET_['controller']) && !isset($GET_['action'])){
    $action = action_default;
    $controlador->$action();
  }else{
    echo 'La pagina no existe';
  }
}else{
  $error = new ErrorController();
}

require_once('views/layouts/footer.php');
