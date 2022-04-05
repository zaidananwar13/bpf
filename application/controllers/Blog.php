<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data = [
			"judul" => "Judul Blog Zaidan",
			"isi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam"
		];

		$this->load->view('hello_codeigniter', $data);
	}
}
