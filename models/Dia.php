<?php
namespace Model;

use Model\ActiveRecord;

class Dia extends ActiveRecord{
    protected static $tabla = 'dias';
    protected static $columnasDB = ['id', 'nombre'];

    public $id;
    public $nombre;

    public function __construct($args = [])
    {
        $this->id = $args['id'];
        $this->nombre = $args['nombre'];
        
    }

}