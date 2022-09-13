<?php

namespace App;

interface InterfacePieza {
    public function mostrarColor();
}

class Pieza implements InterfacePieza {

    protected string $color;

    public function __construct ($colorFicha) {
        if($colorFicha != "🟥" && $colorFicha != "🟦" )
            throw new \Exception ("Solo se aceptan fichas de tipo 🟥 o 🟦");

        $this->color=$colorFicha;
    }

    public function mostrarColor() {
        return $this->color;
    }
}

?>