<?php

class Tabung {
    public $phi = 3.14, $r = 0, $t = 0;

    public function volume() {
        echo "Volume Tabung adalah :" . ($this->phi * $this->r * $this->r * $this->t) . "<hr/>";
    }
    public function luas() {
        echo "Luas Permukaan Tabung adalah :" . (2 * $this->phi * $this->r * ($this->r + $this->t)) . "<hr/>";
    }
    public function luasSelimut() {
        echo "Luas Selimut Tabung adalah :" . (2 * $this->phi * $this->r * $this->t) . "<hr/>";
    }
}
