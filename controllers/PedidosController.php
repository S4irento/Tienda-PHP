<?php
require_once('models/ModelPedidos.php');
class PedidosController
{
  public function index()
  {
    $pedidos = new ModelPedidos();
    $articulos = $pedidos->listarArticulos();
    require_once('views/Pedidos/registro.php');
  }

  public function insertPedidos()
  {

  }
}