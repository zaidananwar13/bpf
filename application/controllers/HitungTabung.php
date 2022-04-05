<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HitungTabung extends CI_Controller {
	public function __construct() {
		parent::__construct();
        $this->load->library("Tabung");
	}

	public function index()
	{
        $this->tabung->r = 5;
        $this->tabung->t = 3;

        echo "Phi: " . $this->tabung->phi . "<br/>";
        echo "Jari-jari: " . $this->tabung->phi . "<br/>";
        echo "Tinggi: " . $this->tabung->phi . "<br/>";
        $this->tabung->volume();
        $this->tabung->luas();
        $this->tabung->luasSelimut();
	}
}
