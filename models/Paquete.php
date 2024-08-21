<?php
namespace Model;

use Model\ActiveRecord;

class Paquete extends ActiveRecord{
    protected static $tabla = 'paquetes';
    protected static $columnasDB = ['id', 'nombre'];

    public $id;
    public $nombre;

    public function __construct($args = [])
    {
        $this->id = $args['id'];
        $this->nombre = $args['nombre'];
        
    }

}