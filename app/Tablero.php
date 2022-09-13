<?php

namespace App;

    interface InterfaceTablero{
        public function devolverAlto();
        public function devolverAncho();
        public function limpiarTablero();
        public function fichaEnTablero();
        public function ponerFicha(int $x, Ficha $ficha);
        public function ultimaJugada(int $ultimaCol, int $ultimaFil);
    }

    class Tablero implements InterfaceTablero {

        protected $tablero;
        protected int $ancho;
        protected int $alto;
        protected int $ultimaFichaCol;
        protected int $ultimaFichaList;

        public function __construct($x = 7, $y = 6){

            $this->ancho = $x;
            $this->alto = $y;
            $this->limpiarTablero();
        }

        public function devolverAlto(){
            return $this->alto;
        }

        
        public function devolverAncho(){
            return $this->ancho;
        }

        public function limpiarTablero(){
            
            for($i = 0; $i < $this->ancho; $i++){
                for($j = 0; $j < $this->alto; $j++){
                    $this->tablero[$i][$j] = "⬜";
                }
            }
        }

        public function ponerFicha($x, Ficha $ficha){

            for($i = 0; $i < $this->alto; $i++){
                if($this->tablero[$x][$i] == "⬜"){
                    $this->tablero = $ficha->mostrarColor();
                }
            }            
            if($i == $this->alto){
            echo("la columna esta llena");
            }   else    {
            $this->ultimaJugada($x,$i);
            }
        }

        public function mostrarTablero(){

            for($i = $this->alto; $i>=0; $i--){
                for($j = 0; $j<$this->ancho; $j++)
                    print($this->tablero[$j][$i]);
            }
            print("\n" );
        }

        public function ultimaJugada($ultimaCol, $ultimaFil){
        
            $this->ultimaFichaCol=$ultimaCol;
            $this->ultimaFichaList=$ultimaFil;
        }
    }

?>