<?php
    class Jugador {
        private $numeroJug;
        private $ptos;

        // Constructor

        public function __construct($numeroJug) {
            $this->numeroJug = $numeroJug;
            $this->ptos = 0;
        }

        // Métodos Get

        public function getNumJug() {
            return $this->numeroJug;
        }

        public function getPtos() {
            return $this->ptos;
        }
        
        // Otros métodos

        public function addPtos($ptos) {
            if ($ptos > 0) {
                $this->ptos += $ptos;
            };            
        }   

    };
?>