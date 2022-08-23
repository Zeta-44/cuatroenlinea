<?php

namespace App;

    interface InterfaceTablero{
        public function limpiarTablero();
        public function fichaEnTablero();
        public function ponerFicha();
    }

    class Tablero implements InterfaceTablero {

        protected $tablero;
        protected int $ancho;
        protected int $alto;


        public function __construct($x = 7, $y = 6){

            $this->ancho = $x;
            $this->alto = $y;

        }

        public function limpiarTablero(){
            
            for($i = 0; $i < $this->ancho; $i++){
                for($j = 0; $j < $this->alto; $j++){
                    $this->tablero[$i][$j] = "gray";
                }
            }

        }

        public function ponerFicha($x, Ficha $ficha){
            
            for($i = 0; $i < $this->alto; $i++){
                if($this->tablero[$x][$i] == "gray"){
                    $this->tablero = $ficha->mostrarColor()
                }
            }
        }
    }

?>