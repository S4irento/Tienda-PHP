<?php
require_once('models/ModelPedidos.php');
class PedidosController
{
  public function index()
  {
    $articulos = $this->listarArticulos();
    $pedidos = $this->listarPedidos();
    require_once('views/Pedidos/registro.php');
  }

  public function listarArticulos()
  {
    $pedidos = new ModelPedidos();
    $articulos = $pedidos->listarArticulos();
    return $articulos;
  }

  public function insertPedidos()
  {
    $pedidos = new ModelPedidos();

    $pedidos->setNombre_cliente($_POST['cliente']);
    $pedidos->setId_articulo($_POST['articulo']);
    $pedidos->setCantidad($_POST['cantidad']);
    $pedidos->setCiudad($_POST['ciudad']);
    $pedidos->setDireccion($_POST['direccion']);

    $result = $pedidos->insertPedido();

    header('location: '.base_url.'Pedidos/index');
  }

  public function listarPedidos()
  {
    $pedidos = new ModelPedidos();
    return $pedidos->listarPedidos();
  }
}