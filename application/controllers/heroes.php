<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Heroes extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('model_heroes');
	}
	public function index()
	{
		$this->load->view('Header');
		$this->load->view('welcome_message');
		$this->load->view('Footer');
	}
	public function SecretLogin()
	{
		$this->load->view('Header');
		$this->load->view('LoginHero');
	}
	public function CheckHero(){
		$mail=$this -> input -> post('Mail');
		$datos['query'] =$this->model_heroes->get_heroe($mail);
		$this->load->view('Header',$datos);
		$this->load->view('DirectoryHero');
	}
	public function ShowHero($c_id){
		$data['query']=$this->model_heroes->getAll($c_id);
		$this->load->view('Header',$data);
		$this->load->view('DirectoryHero');
	}
	/*public function EditData($val){
		$data['query']=$this->model_heroes->get_heroe($val);
		$this->load->view('Header',$data);
		$this->load->view('EditForm');
	}*/
	
        public function InsertHero()
	{
		$this->load->view('Header');
		$this->load->view('HeroForm');
		$this->load->view('Footer');
		
		$data = array(
		'nick' => $this -> input -> post('Name'),
		'superpower' => $this -> input -> post('Power'),
		'phone' => $this -> input -> post('Phone'),
		'mail' => $this -> input -> post('Email'),
		'category_id' => $this -> input -> post('Category')
		);
		$this->model_heroes->insert($data);
		redirect(base_url());
	}
	public function UploadHero($id)
	{
		$data['query']=$this->model_heroes->get_one($id);
		$this->load->view('Header',$data);
		$this->load->view('EditForm'); //enviamos los datos al formulario y en la vista los colocamos
		
		$data = array(
		'nick' => $this -> input -> post('Name'),
		'superpower' => $this -> input -> post('Power'),
		'phone' => $this -> input -> post('Phone'),
		'mail' => $this -> input -> post('Email'),
		'category_id' => $this -> input -> post('Category')
		);
		$this->model_heroes->insert($data);
		redirect(base_url());
	}
	
	public function Delete($mail){
		$data['query']=$this->model_heroes->delHero($mail);
		redirect(base_url());
	}
}