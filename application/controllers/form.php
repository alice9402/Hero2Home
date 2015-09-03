<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_heroes');
	}
	
	public function index()
	{
		// obtenemos el array de profesiones y lo preparamos para enviar
		$datos['arrCategories'] = $this->model_heroes->get_categories();
		// cargamos  la interfaz y le enviamos los datos
		$this->load->view('Header');
		$this->load->view('HeroForm', $datos);
	}
}