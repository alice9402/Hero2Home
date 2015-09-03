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
	public function ShowHero($c_id){
		$data['query']=$this->model_heroes->getAll($c_id);
		$this->load->view('Header',$data);
		$this->load->view('DirectoryHero');
	}
}