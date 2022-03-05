<?php
require_once('config/Database.php');
class ModelArticulo extends Database
{
  private $id;
  private $nombre;
  private $valor;

  function setNombre($nombre)
  {
    $this->nombre = $this->db->real_escape_string($nombre);
  }

  function getNombre()
  {
    return $this->nombre;
  }

  function getId()
  {
    return $this->id;
  }

  function setId($id)
  {
    $this->$id = $id;
  }

  function setValor($valor)
  {
    $this->valor = $this->db->real_escape_string($valor);
  }

  function getValor()
  {
    return $this->valor;
  }

  public function insertArticulo()
  {
    $nombre = $this->getNombre();
    $valor = $this->getValor();
    $sql = "INSERT INTO articulos(nombre, valor) VALUES ('$nombre', '$valor')";
    $insert = $this->db->query($sql);
    return $insert ? true: false;
  }

}