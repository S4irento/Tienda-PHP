<?php

require_once('config/Database.php');

class ModelPedidos extends Database
{
  private $nombre_cliente;
  private $id_articulo;
  private $cantidad;
  private $ciudad;
  private $direccion;
  private $fecha;

  function setNombre_cliente($nombre_cliente)
  {
    $this->nombre_cliente = $nombre_cliente;
  }

  function getNombre_cliente()
  {
    return $this->nombre_cliente;
  }

  function setId_articulo($id_articulo)
  {
    $this->id_articulo = $id_articulo;
  }

  function getId_articulo()
  {
    return $this->id_articulo;
  }

  function setCantidad($cantidad)
  {
    $this->cantidad = $cantidad;
  }

  function getCantidad()
  {
    return $this->cantidad;
  }

  function setCiudad($ciudad)
  {
    $this->ciudad = $ciudad;
  }

  function getCiudad()
  {
    return $this->ciudad;
  }

  function setDireccion($direccion)
  {
    $this->direccion = $direccion;
  }

  function getDireccion()
  {
    return $this->direccion;
  }

  function setFecha($fecha)
  {
    $this->fecha = $fecha;
  }

  function getFecha()
  {
    return $this->fecha;
  }

  public function insertPedido()
  {
    $nombre_cliente = $this->getNombre_cliente();
    $id_articulo = $this->getId_articulo();
    $cantidad = $this->getCantidad();
    $ciudad = $this->getCiudad();
    $direccion = $this->getDireccion();

    $sql = "INSERT INTO pedidos(nombre_cliente, id_articulo, cantidad, ciudad, direccion) VALUES($nombre_cliente, $id_articulo, $cantidad, $ciudad, $direccion)";

    $insert = $this->db->query($sql);

    return $insert ? true : false;
  }

  public function listarArticulos()
  {
    $sql = "SELECT id, nombre from articulos";
    $datos = $this->db->query($sql);
    return $datos;
  }

  public function listarPedidos()
  {
    $sql = 'SELECT p.nombre_cliente, a.nombre as articulo, p.cantidad, (a.valor * p.cantidad) as valor_total, p.ciudad, p.direccion, date(p.fecha) as fecha FROM pedidos p JOIN articulos a';
    $datos = $this->db->query($sql);
    return $datos;
  }

}