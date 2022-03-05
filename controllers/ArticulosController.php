<?php
require_once('models/ModelArticulo.php');
class ArticulosController
{
  public function index()
  {
    require_once('views/Articulos/registro.php');
  }

  public function insertArticulo()
  {
    $Articulos = new ModelArticulo();

    $nombre = $_POST['nombre'];
    $valor = $_POST['valor'];

    $Articulos->setNombre($nombre);
    $Articulos->setValor($valor);

    $insert = $Articulos->insertArticulo();

    header('location: '.base_url.'Articulos/index');

    return $insert;
  }

}