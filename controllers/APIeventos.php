<?php
namespace Controllers;

use Model\EventoHorario;

class APIeventos {
    public static function index(){
        $dia_id = $_GET['dia_id']?? '';
        $categoria_id = $_GET['categoria_id']?? '';

        $dia_id = filter_var($dia_id, FILTER_VALIDATE_INT);
        $categoria_id = filter_var($categoria_id, FILTER_VALIDATE_INT);

        if (!$dia_id || !$categoria_id) {
            echo json_encode(['error' => 'debe contenedor dia_id y categoria_id']);
            return;
        }


        $eventos = EventoHorario::whereArray([
            'categoria_id' => $categoria_id,
            'dia_id' => $dia_id
        ]);
        echo json_encode($eventos);
    }
}