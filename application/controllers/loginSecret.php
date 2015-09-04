<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginSecret extends CI_Controller {

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
        public function CheckHero(){
		$mail=$this -> input -> post('Mail');
		$data['query']=$this->model_heroes->get_hero($mail);
		$this->load->view('EditForm',$data);
	}
	/*public function EditData($val){
		$data['query']=$this->model_heroes->get_heroe($val);
		//$this->load->view('Header',$data);
		$this->load->view('EditForm',$data);
	}*/
	public function upload()
	{
		// obtenemos el array de profesiones y lo preparamos para enviar
		$datos = $this->model_heroes->get_heroe();
		// cargamos  la interfaz y le enviamos los datos
		$this->load->view('Header');
		$this->load->view('EditForm', $datos);
	}
}