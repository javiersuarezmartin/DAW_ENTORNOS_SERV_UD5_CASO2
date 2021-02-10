<?php
require_once('Jugador.php');

    class Equipo {
        private $jugadores;        

        // Constructor

        public function __construct() {
            $this->jugadores = array();            
        }

        // Métodos Get / Set

        public function getJugadores() {
            return $this->jugadores;
        }

        public function setJugadores($jugadores) {
            $this->jugadores = $jugadores;
        }
        
        // Otros métodos

        public function addJug($jugador) {
           array_push($this->jugadores, $jugador);
        }

        public function getJugador($numJugador) {
            $encontrado = -1;
            foreach ($this->jugadores as $posi => $jugador) {
                if ($jugador->getNumJug() == $numJugador ){
                    $encontrado = $posi;
                };
            };  
            
            if ($encontrado >= 0) {
                return $this->jugadores[$posi];
            } else {
                echo ('No se ha encontrado el jugador');
            };              
        }

        public function getTotal() {
            $pntos_total = 0;
            foreach ($this->jugadores as $jugador) {
                $pntos_total += $jugador->getPtos();
            };          
            
            return $pntos_total;
        }
        
    };
?>