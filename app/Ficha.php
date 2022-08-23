<?php

namespace App;

interface InterfacePieza {
    public function mostrarColor();
}

class Pieza implements InterfacePieza {

    protected string $color;

    public function __construct ($colorFicha) {
        $this->color=$colorFicha;
    }

    public function mostrarColor() {
        return $this->color;
    }
}

?>