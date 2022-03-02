<?php

class Database{
  public $db;

  public function __construct()
  {
    $this->db = $this->connect();
  }

  public static function connect()
  {
    $db = new mysqli('localhost','root','','tienda');
    $db->query("SET NAMES 'utf8'");
    return $db;
  }
}